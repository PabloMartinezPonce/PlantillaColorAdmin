requirejs.config({
  //By default load any module IDs from js/lib
  baseUrl: 'js/lib',
  //except, if the module ID starts with "app",
  //load it from the js/app directory. paths
  //config is relative to the baseUrl, and
  //never includes a ".js" extension since
  //the paths config could be for a directory.
  paths: {
    app: '../app'
  }
});

// Start the main app logic.
requirejs(['flot'], function (Plot) {
  var d1 = [];
  for (var i = 0; i < 14; i += 0.5) {
    d1.push([i, Math.sin(i)]);
  }

  var d2 = [[0, 3], [4, 8], [8, 5], [9, 13]];

  // A null signifies separate line segments

  var d3 = [[0, 12], [7, 12], null, [7, 2.5], [12, 2.5]];

  var placeholder = document.getElementById('placeholder');

  new Plot(placeholder, [d1, d2, d3]);

  // Add the Flot version string to the footer

  var footer = document.getElementById('footer');

  footer.innerHTML = 'flot.js ' + Plot.version + '  &ndash; ' + footer.innerHTML;
});