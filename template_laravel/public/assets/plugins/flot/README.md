# flot.js

## About ##

`flot.js` is a Javascript plotting library using HTML5 canvas. Based off of a fork of [https://github.com/flot/flot](https://github.com/flot/flot), `flot.js` has made the following major changes:

* Removed [jQuery](https://jquery.com/) as a dependency
* Exposes a simple events API
* Library is as a UMD (Universal Module Definition) module

`flot.js` kept nearly all of the existing API the same with one major change that should be noted:

* Events
    * `jquery.flot.js` used jQuery Event system. This is why `EventEmitter` was introduced. Now if you want to "trigger" events, you do so with the Plot instance. For example, listening on events:
        ```js
        // before
        $(placeholder).bind('plothover', function(e){});
        
        // now
        plot.bind('plothover', function(e){});
        ```
        
        And for triggering events:
        ```js
        // before
        $(placeholder).trigger('plotselected', [r]);
        
        // after
        plot.emit('plotselected', event, r);
        ```
        
        **IMPORTANT:** Noticed that the triggering event example, we pass in arguments not as an array _AND_ we passed the event object. This is because jQuery always passed in a jQuery event object as its first argument. Something thats worth mentioning.
        
    * What about the DOM events??
        * The "eventHolder" is no longer available. Instead, it has been replaced with the actualy `<canvas class="flot-overlay">` element. You should attach whatever DOM event you wish on this element. For example:
            ```js
            // before:
            plot.hooks.bindEvents.push(function(plot, eventHolder) {
              eventHolder.bind('mouseover', onMouseOver);
              eventHolder.mousedown(onMouseDown);
              eventHolder.on('click', onClick);
            });
            plot.hooks.shutdown.push(function(plot, eventHolder) {
              eventHolder.unbind('mouseover', onMouseOver);
              eventHolder.unbind('mousedown', onMouseDown);
              eventHolder.off('click', onClick);
            });
            
            // now:
            
            plot.hooks.bindEvents.push(function(plot, overlayElem) {
              overlayElem.addEventListener('click', onClick);      // IE9+
              overlayElem.attachEvent('onmousedown', onMouseDown); // < IE9
              // or better yet, use `dom-tools` since it's already a dep.
              DOMTools.attachEventListener(overlayElem, 'mouseover', onMouseOver); // Any IE version
            });
            plot.hooks.shutdown.push(function(plot, eventHolder) {
              eventHolder.removeEventListener('click', onClick);
              eventHolder.detachEvent('onmousedown', onMouseDown);
              DOMTools.removeEventListener(overlayElem, 'mouseover', onMouseOver);
            });
            ```

Check out the examples in `examples/index.html` page. Most of them have been updated with `flot.js`.

## Why should you use this over the original version? ##

If your project does not require jQuery this would be best suited for you. If you're already using jQuery, you should use the original version.

## Browser support ##

`flot.js` supports:

* IE8+
* Chrome
* Firefox
* Safari
* Opera 10+

## Dependencies ##

Although jQuery is no longer required, in order to replace the missing pieces two other dependencies are required: [dom-tools](https://github.com/dennisduong/dom-tools) and [EventEmitter](https://github.com/Olical/EventEmitter)

It may sound silly that we remove one and added two more libraries, if you do *NOT* need jQuery you can save a lot of overhead.

Using [closure-compiler](http://closure-compiler.appspot.com/home):

* `jquery-1.12.0.min.js` is roughly 33.15KB gzipped or 95.17KB uncompressed.
* `jquery-2.2.0.min.js` is roughly 29.29KB gzipped or 83.67KB uncompressed.
* `dom-utils.min.js` and `EventEmitter.min.js` combined for 2.76KB gzipped or 8.36KB uncompressed.
    * `dom-utils.min.js` (v0.1.1) is roughly 1.86KB gzipped or 5.45KB uncompressed.
    * `EventEmitter.min.js` (v4.3.0) is roughly 1.03KB gzipped or 2.91KB uncompressed.

## Installation ##

### Browser via script tag ###

Just include the Javascript file after you've included dom-tools and EventEmitter.

### Browser via AMD ###

If the script is loaded into a page containing an AMD loader (such as [RequireJS](http://requirejs.org/)), use it like this:

```
require(['flot'], function(Plot) {
    var plot = new Plot(document.getElementById('placeholder'), [], {});
});
```

### node.js or Browser via Browserify ###

Install the file via npm (bower will come soon):

```
npm install flotjs --save
```

...and then require it

```
var Plot = require('flotjs');
```

### Heads up! ###

Generally, all browsers that support the HTML5 canvas tag are supported.

For support for Internet Explorer < 9, you can use [Excanvas]
[excanvas], a canvas emulator; this is used in the examples bundled
with Flot. You just include the excanvas script like this:

```html
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="excanvas.min.js"></script><![endif]-->
```

## Basic usage ##

Create a placeholder div to put the graph in:

```html
<div id="placeholder"></div>
```

You need to set the width and height of this div, otherwise the plot
library doesn't know how to scale the graph. You can do it inline like
this:

```html
<div id="placeholder" style="width:600px;height:300px"></div>
```

You can also do it with an external stylesheet. Make sure that the
placeholder isn't within something with a display:none CSS property -
in that case, Flot has trouble measuring label dimensions which
results in garbled looks and might have trouble measuring the
placeholder dimensions which is fatal (it'll throw an exception).

Then when the div is ready in the DOM, which is usually on document
ready, run the plot function:

```js
new Plot(document.getElementById("placeholder"), data, options);
```

Here, data is an array of data series and options is an object with
settings if you want to customize the plot. Take a look at the
examples for some ideas of what to put in or look at the 
[API reference](API.md). Here's a quick example that'll draw a line 
from (0, 0) to (1, 1):

```js
new Plot(document.getElementById("placeholder"), [ [[0, 0], [1, 1]] ], { yaxis: { max: 1 } });
```

The plot function immediately draws the chart and then returns a plot
object with a couple of methods.


## What's with the name? ##

First: it's pronounced with a short o, like "plot". Not like "flawed".

So "Flot" rhymes with "plot".

And if you look up "flot" in a Danish-to-English dictionary, some of
the words that come up are "good-looking", "attractive", "stylish",
"smart", "impressive", "extravagant". One of the main goals with Flot
is pretty looks.


## Notes about the examples ##

In order to have a useful, functional example of time-series plots using time
zones, date.js from [timezone-js][timezone-js] (released under the Apache 2.0
license) and the [Olson][olson] time zone database (released to the public
domain) have been included in the examples directory.  They are used in
examples/axes-time-zones/index.html.

[excanvas]: http://code.google.com/p/explorercanvas/
[timezone-js]: https://github.com/mde/timezone-js
[olson]: http://ftp.iana.org/time-zones
