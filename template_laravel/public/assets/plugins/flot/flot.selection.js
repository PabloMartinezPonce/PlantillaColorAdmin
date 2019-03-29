/* Flot plugin for selecting regions of a plot.

Original work Copyright (c) 2007-2014 IOLA and Ole Laursen.
Modified work Copyright (c) 2016 Dennis Duong.
Licensed under the MIT license.

The plugin supports these options:

selection: {
	mode: null or "x" or "y" or "xy",
	color: color,
	shape: "round" or "miter" or "bevel",
	minSize: number of pixels
}

Selection support is enabled by setting the mode to one of "x", "y" or "xy".
In "x" mode, the user will only be able to specify the x range, similarly for
"y" mode. For "xy", the selection becomes a rectangle where both ranges can be
specified. "color" is color of the selection (if you need to change the color
later on, you can get to it with plot.getOptions().selection.color). "shape"
is the shape of the corners of the selection.

"minSize" is the minimum size a selection can be in pixels. This value can
be customized to determine the smallest size a selection can be and still
have the selection rectangle be displayed. When customizing this value, the
fact that it refers to pixels, not axis units must be taken into account.
Thus, for example, if there is a bar graph in time mode with BarWidth set to 1
minute, setting "minSize" to 1 will not make the minimum selection size 1
minute, but rather 1 pixel. Note also that setting "minSize" to 0 will prevent
"plotunselected" events from being fired when the user clicks the mouse without
dragging.

When selection support is enabled, a "plotselected" event will be emitted on
the DOM element you passed into the plot function. The event handler gets a
parameter with the ranges selected on the axes, like this:

	plot.on( "plotselected", function( event, ranges ) {
		alert("You selected " + ranges.xaxis.from + " to " + ranges.xaxis.to)
		// similar for yaxis - with multiple axes, the extra ones are in
		// x2axis, x3axis, ...
	});

The "plotselected" event is only fired when the user has finished making the
selection. A "plotselecting" event is fired during the process with the same
parameters as the "plotselected" event, in case you want to know what's
happening while it's happening,

A "plotunselected" event with no arguments is emitted when the user clicks the
mouse to remove the selection. As stated above, setting "minSize" to 0 will
destroy this behavior.

The plugin also adds the following methods to the plot object:

- setSelection( ranges, preventEvent )

  Set the selection rectangle. The passed in ranges is on the same form as
  returned in the "plotselected" event. If the selection mode is "x", you
  should put in either an xaxis range, if the mode is "y" you need to put in
  an yaxis range and both xaxis and yaxis if the selection mode is "xy", like
  this:

	setSelection({ xaxis: { from: 0, to: 10 }, yaxis: { from: 40, to: 60 } });

  setSelection will trigger the "plotselected" event when called. If you don't
  want that to happen, e.g. if you're inside a "plotselected" handler, pass
  true as the second parameter. If you are using multiple axes, you can
  specify the ranges on any of those, e.g. as x2axis/x3axis/... instead of
  xaxis, the plugin picks the first one it sees.

- clearSelection( preventEvent )

  Clear the selection rectangle. Pass in true to avoid getting a
  "plotunselected" event.

- getSelection()

  Returns the current selection in the same format as the "plotselected"
  event. If there's currently no selection, the function returns null.

*/

(function (root, factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD. Register as an anonymous module.
    define(['dom-tools', 'flot'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // Node. Does not work with strict CommonJS, but only CommonJS-like
    // environments that support module.exports, like Node.
    //
    // Usually CommonJS expects a return module so we just return the
    // Plot library.
    module.exports = factory(require('dom-tools'), require('flotjs'));
  } else {
    // Browser globals
    factory(root.DOMTools, root.Plot);
  }
}(this, function (DOMTools, Plot) {

  function init(plot) {
    var selection = {
      first: {x: -1, y: -1}, second: {x: -1, y: -1},
      show: false,
      active: false
    };

    // FIXME: The drag handling implemented here should be
    // abstracted out, there's some similar code from a library in
    // the navigation plugin, this should be massaged a bit to fit
    // the Flot cases here better and reused. Doing this would
    // make this plugin much slimmer.
    var savedhandlers = {};

    var mouseUpHandler = null;

    function onMouseMove(/* MouseEvent */ e) {
      if (selection.active) {
        updateSelection(e);

        //plot.getPlaceholder().trigger("plotselecting", [getSelection()]);
        plot.emit("plotselecting", e, getSelection());
      }
    }

    function onMouseDown(/* MouseEvent */ e) {
      // only accept left-click
      if (e.which != 1) {
        return;
      }

      // cancel out any text selections
      document.body.focus();

      // prevent text selection and drag in old-school browsers
      if (document.onselectstart !== undefined && savedhandlers.onselectstart == null) {
        savedhandlers.onselectstart = document.onselectstart;
        document.onselectstart = function () {
          return false;
        };
      }
      if (document.ondrag !== undefined && savedhandlers.ondrag == null) {
        savedhandlers.ondrag = document.ondrag;
        document.ondrag = function () {
          return false;
        };
      }

      setSelectionPos(selection.first, e);

      selection.active = true;

      // this is a bit silly, but we have to use a closure to be
      // able to whack the same handler again
      mouseUpHandler = function (/* MouseEvent */ e) {
        onMouseUp(e);
      };

      DOMTools.addEventListener(document, "mouseup", mouseUpHandler);
    }

    function onMouseUp(/* MouseEvent */ e) {
      DOMTools.removeEventListener(document, "mouseup", mouseUpHandler);
      mouseUpHandler = null;

      // revert drag stuff for old-school browsers
      if (document.onselectstart !== undefined)
        document.onselectstart = savedhandlers.onselectstart;
      if (document.ondrag !== undefined)
        document.ondrag = savedhandlers.ondrag;

      // no more dragging
      selection.active = false;
      updateSelection(e);

      if (selectionIsSane()) {
        triggerSelectedEvent(e);
      } else {
        // this counts as a clear
        //plot.getPlaceholder().trigger("plotunselected", []);
        plot.emit("plotunselected", e);
        //plot.getPlaceholder().trigger("plotselecting", [null]);
        plot.emit("plotselecting", e, null);
      }

      return false;
    }

    function getSelection() {
      if (!selectionIsSane()) return null;

      if (!selection.show) return null;

      var r = {}, c1 = selection.first,
        c2 = selection.second,
        axes = plot.getAxes(), axis;

      for (var name in axes) {
        if (axes.hasOwnProperty(name)) {
          axis = axes[name];
          if (axis.used) {
            var p1 = axis.c2p(c1[axis.direction]), p2 = axis.c2p(c2[axis.direction]);
            r[name] = {from: Math.min(p1, p2), to: Math.max(p1, p2)};
          }
        }
      }
      //$.each(plot.getAxes(), function (name, axis) {
      //  if (axis.used) {
      //    var p1 = axis.c2p(c1[axis.direction]), p2 = axis.c2p(c2[axis.direction]);
      //    r[name] = {from: Math.min(p1, p2), to: Math.max(p1, p2)};
      //  }
      //});
      return r;
    }

    function triggerSelectedEvent(/* MouseEvent */  e) {
      var r = getSelection();

      //plot.getPlaceholder().trigger("plotselected", [r]);
      plot.emit("plotselected", e, r);

      // backwards-compat stuff, to be removed in future
      //
      // flot.js notes: We'll just ao ahead and remove this now.
      //
      //if (r.xaxis && r.yaxis) {
      //  plot.getPlaceholder().trigger("selected", [{
      //    x1: r.xaxis.from,
      //    y1: r.yaxis.from,
      //    x2: r.xaxis.to,
      //    y2: r.yaxis.to
      //  }]);
      //}
    }

    function clamp(min, value, max) {
      return value < min ? min : (value > max ? max : value);
    }

    function setSelectionPos(pos, e) {
      var o = plot.getOptions();
      var offset = DOMTools.offset(plot.getPlaceholder()); // plot.getPlaceholder().offset();
      var plotOffset = plot.getPlotOffset();
      pos.x = clamp(0, e.pageX - offset.left - plotOffset.left, plot.width());
      pos.y = clamp(0, e.pageY - offset.top - plotOffset.top, plot.height());

      if (o.selection.mode == "y")
        pos.x = pos == selection.first ? 0 : plot.width();

      if (o.selection.mode == "x")
        pos.y = pos == selection.first ? 0 : plot.height();
    }

    function updateSelection(pos) {
      if (pos.pageX == null)
        return;

      setSelectionPos(selection.second, pos);
      if (selectionIsSane()) {
        selection.show = true;
        plot.triggerRedrawOverlay();
      }
      else
        clearSelection(true);
    }

    function clearSelection(preventEvent) {
      if (selection.show) {
        selection.show = false;
        plot.triggerRedrawOverlay();
        if (!preventEvent) {
          //plot.getPlaceholder().trigger("plotunselected", []);
          plot.emit("plotunselected");
        }
      }
    }

    // function taken from markings support in Flot
    function extractRange(ranges, coord) {
      var axis, from, to, key, axes = plot.getAxes();

      for (var k in axes) {
        axis = axes[k];
        if (axis.direction == coord) {
          key = coord + axis.n + "axis";
          if (!ranges[key] && axis.n == 1)
            key = coord + "axis"; // support x1axis as xaxis
          if (ranges[key]) {
            from = ranges[key].from;
            to = ranges[key].to;
            break;
          }
        }
      }

      // backwards-compat stuff - to be removed in future
      if (!ranges[key]) {
        axis = coord == "x" ? plot.getXAxes()[0] : plot.getYAxes()[0];
        from = ranges[coord + "1"];
        to = ranges[coord + "2"];
      }

      // auto-reverse as an added bonus
      if (from != null && to != null && from > to) {
        var tmp = from;
        from = to;
        to = tmp;
      }

      return {from: from, to: to, axis: axis};
    }

    function setSelection(ranges, preventEvent) {
      var range, o = plot.getOptions();

      if (o.selection.mode == "y") {
        selection.first.x = 0;
        selection.second.x = plot.width();
      }
      else {
        range = extractRange(ranges, "x");

        selection.first.x = range.axis.p2c(range.from);
        selection.second.x = range.axis.p2c(range.to);
      }

      if (o.selection.mode == "x") {
        selection.first.y = 0;
        selection.second.y = plot.height();
      }
      else {
        range = extractRange(ranges, "y");

        selection.first.y = range.axis.p2c(range.from);
        selection.second.y = range.axis.p2c(range.to);
      }

      selection.show = true;
      plot.triggerRedrawOverlay();
      if (!preventEvent && selectionIsSane())
        triggerSelectedEvent(undefined);
    }

    function selectionIsSane() {
      var minSize = plot.getOptions().selection.minSize;
      return Math.abs(selection.second.x - selection.first.x) >= minSize &&
        Math.abs(selection.second.y - selection.first.y) >= minSize;
    }

    plot.clearSelection = clearSelection;
    plot.setSelection = setSelection;
    plot.getSelection = getSelection;

    plot.hooks.bindEvents.push(function (plot, overlayElement) {
      var o = plot.getOptions();
      if (o.selection.mode != null) {
        DOMTools.addEventListener(overlayElement, 'mousemove', onMouseMove);
        DOMTools.addEventListener(overlayElement, 'mousedown', onMouseDown);
      }
    });


    plot.hooks.drawOverlay.push(function (plot, ctx) {
      // draw selection
      if (selection.show && selectionIsSane()) {
        var plotOffset = plot.getPlotOffset();
        var o = plot.getOptions();

        ctx.save();
        ctx.translate(plotOffset.left, plotOffset.top);

        var c = Plot.Color.parse(o.selection.color);

        ctx.strokeStyle = c.scale('a', 0.8).toString();
        ctx.lineWidth = 1;
        ctx.lineJoin = o.selection.shape;
        ctx.fillStyle = c.scale('a', 0.4).toString();

        var x = Math.min(selection.first.x, selection.second.x) + 0.5,
          y = Math.min(selection.first.y, selection.second.y) + 0.5,
          w = Math.abs(selection.second.x - selection.first.x) - 1,
          h = Math.abs(selection.second.y - selection.first.y) - 1;

        ctx.fillRect(x, y, w, h);
        ctx.strokeRect(x, y, w, h);

        ctx.restore();
      }
    });

    plot.hooks.shutdown.push(function (plot, overlayElement) {
      DOMTools.removeEventListener(overlayElement, "mousemove", onMouseMove);
      DOMTools.removeEventListener(overlayElement, "mousedown", onMouseDown);

      if (mouseUpHandler) {
        DOMTools.removeEventListener(document, "mouseup", mouseUpHandler);
        mouseUpHandler = null;
      }
    });

  }

  Plot.plugins.push({
    init: init,
    options: {
      selection: {
        mode: null, // one of null, "x", "y" or "xy"
        color: "#e8cfac",
        shape: "round", // one of "round", "miter", or "bevel"
        minSize: 5 // minimum number of pixels
      }
    },
    name: 'selection',
    version: '0.1'
  });

  return Plot;

}));