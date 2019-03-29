let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/assets/js/bundle.js');
mix.styles([
	'node_modules/bootstrap/dist/css/bootstrap.css',
	'node_modules/jqueryui/jquery-ui.min.css'
], 'public/assets/css/bundle.css');

// img
mix.copy('../assets/img/', 'public/assets/img/');

// img
mix.copy('../assets/css/', 'public/assets/css/');

// jquery-migrate
mix.copy('node_modules/jquery-migrate/dist/', 'public/assets/plugins/jquery-migrate/');

// flotjs
mix.copy('node_modules/flotjs/', 'public/assets/plugins/flot/');

// nvd3
mix.js('resources/assets/js/nvd3.js', 'public/assets/plugins/nvd3/nvd3.min.js');
mix.copy('node_modules/nvd3/build/nv.d3.min.css', 'public/assets/plugins/nvd3/nvd3.min.css');

// jvectormap-next
mix.styles(['node_modules/jvectormap-next/jquery-jvectormap.css'], 'public/assets/plugins/jquery-jvectormap/jquery-jvectormap.min.css');
mix.copy('node_modules/jvectormap-next/jquery-jvectormap.min.js', 'public/assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js');

// gritter
mix.copy('node_modules/gritter/', 'public/assets/plugins/gritter/');

// bootstrap-datepicker
mix.copy('node_modules/bootstrap-datepicker/dist/', 'public/assets/plugins/bootstrap-datepicker/');

// jquery-sparkline
mix.copy('node_modules/jquery-sparkline/jquery.sparkline.min.js', 'public/assets/plugins/jquery-sparkline/jquery.sparkline.min.js');

// tag-it
mix.copy('node_modules/tag-it/css/', 'public/assets/plugins/tag-it/css/');
mix.copy('node_modules/tag-it/js/', 'public/assets/plugins/tag-it/js/');

// bootstrap3-wysihtml5-bower
mix.copy('node_modules/bootstrap3-wysihtml5-bower/dist/', 'public/assets/plugins/bootstrap3-wysihtml5/');

// highlight.js
mix.js('resources/assets/js/highlight.js', 'public/assets/plugins/highlight/highlight.min.js');

// flag-icon-css
mix.copy('node_modules/flag-icon-css/', 'public/assets/plugins/flag-icon-css/');

// sweetalert
mix.js('resources/assets/js/sweetalert.js', 'public/assets/plugins/sweetalert/sweetalert.min.js');

// simple-line-icons
mix.copy('node_modules/simple-line-icons/', 'public/assets/plugins/simple-line-icons/');

// bootstrap-social
mix.copy('node_modules/bootstrap-social/bootstrap-social.css', 'public/assets/plugins/bootstrap-social/bootstrap-social.css');

// intro.js
mix.copy('node_modules/intro.js/introjs.css', 'public/assets/plugins/introjs/introjs.css');
mix.copy('node_modules/intro.js/introjs-rtl.css', 'public/assets/plugins/introjs/introjs-rtl.css');
mix.copy('node_modules/intro.js/intro.js', 'public/assets/plugins/introjs/intro.js');

// intro.js
mix.copy('node_modules/jstree/dist/', 'public/assets/plugins/jstree/');

// jquery-knob
mix.copy('node_modules/jquery-knob/', 'public/assets/plugins/jquery-knob/');

// morris
mix.copy('node_modules/raphael/raphael.min.js', 'public/assets/plugins/morris/raphael.min.js');
mix.copy('node_modules/raphael/raphael.js', 'public/assets/plugins/morris/raphael.js');
mix.copy('node_modules/morris.js/morris.css', 'public/assets/plugins/morris/morris.css');
mix.copy('node_modules/morris.js/morris.js', 'public/assets/plugins/morris/morris.js');
mix.copy('node_modules/morris.js/morris.min.js', 'public/assets/plugins/morris/morris.min.js');

// chart.js
mix.copy('node_modules/chart.js/dist/', 'public/assets/plugins/chartjs/');

// fullcalendar
mix.copy('node_modules/fullcalendar/dist/', 'public/assets/plugins/fullcalendar/');

// moment
mix.copy('node_modules/moment/', 'public/assets/plugins/moment/');

// lity
mix.copy('node_modules/lity/dist/', 'public/assets/plugins/lity/');

// lightbox2
mix.copy('node_modules/lightbox2/dist/', 'public/assets/plugins/lightbox2/');

// ckeditor
mix.copy('node_modules/ckeditor/', 'public/assets/plugins/ckeditor/');

// parsleyjs
mix.copy('node_modules/parsleyjs/', 'public/assets/plugins/parsleyjs/');

// smartwizard
mix.copy('node_modules/smartwizard/', 'public/assets/plugins/smartwizard/');

// summernote
mix.copy('node_modules/summernote/', 'public/assets/plugins/summernote/');

// switchery
mix.js('resources/assets/js/switchery.js', 'public/assets/plugins/switchery/switchery.min.js');

// jquery-mockjax
mix.copy('node_modules/jquery-mockjax/', 'public/assets/plugins/jquery-mockjax/');

// select2
mix.copy('node_modules/select2/', 'public/assets/plugins/select2/');

// dropzone
mix.copy('node_modules/dropzone/', 'public/assets/plugins/dropzone/');

// blueimp-file-upload
mix.copy('node_modules/blueimp-file-upload/', 'public/assets/plugins/blueimp-file-upload/');
mix.copy('node_modules/blueimp-load-image/', 'public/assets/plugins/blueimp-load-image/');
mix.copy('node_modules/blueimp-tmpl/', 'public/assets/plugins/blueimp-tmpl/');
mix.copy('node_modules/blueimp-gallery/', 'public/assets/plugins/blueimp-gallery/');
mix.copy('node_modules/blueimp-canvas-to-blob/', 'public/assets/plugins/blueimp-canvas-to-blob/');

// ion-rangeslider
mix.copy('node_modules/ion-rangeslider/', 'public/assets/plugins/ion-rangeslider/');

// jquery.maskedinput
mix.copy('node_modules/jquery.maskedinput/', 'public/assets/plugins/jquery.maskedinput/');

// bootstrap-colorpicker
mix.copy('node_modules/bootstrap-colorpicker/', 'public/assets/plugins/bootstrap-colorpicker/');

// bootstrap-timepicker
mix.copy('node_modules/bootstrap-timepicker/', 'public/assets/plugins/bootstrap-timepicker/');

// bootstrap-combobox
mix.copy('node_modules/@danielfarrell/bootstrap-combobox/', 'public/assets/plugins/bootstrap-combobox/');

// bootstrap-select
mix.copy('node_modules/bootstrap-select/', 'public/assets/plugins/bootstrap-select/');

// bootstrap-tagsinput
mix.copy('node_modules/bootstrap-tagsinput/', 'public/assets/plugins/bootstrap-tagsinput/');

// bootstrap-daterangepicker
mix.copy('node_modules/bootstrap-daterangepicker/', 'public/assets/plugins/bootstrap-daterangepicker/');

// eonasdan-bootstrap-datetimepicker
mix.copy('node_modules/eonasdan-bootstrap-datetimepicker/', 'public/assets/plugins/eonasdan-bootstrap-datetimepicker/');

// jquery-simplecolorpicker
mix.copy('node_modules/jquery-simplecolorpicker/', 'public/assets/plugins/jquery-simplecolorpicker/');

// bootstrap-show-password
mix.copy('node_modules/bootstrap-show-password/', 'public/assets/plugins/bootstrap-show-password/');

// clipboard
mix.copy('node_modules/clipboard/', 'public/assets/plugins/clipboard/');

// datatables
mix.copy('node_modules/datatables.net/js/', 'public/assets/plugins/datatables/js/');
mix.copy('node_modules/datatables.net-bs4/css/', 'public/assets/plugins/datatables/css/');
mix.copy('node_modules/datatables.net-bs4/js/', 'public/assets/plugins/datatables/js/');
mix.copy('node_modules/datatables.net-autofill/js/', 'public/assets/plugins/datatables/js/autoFill/');
mix.copy('node_modules/datatables.net-autofill-bs4/css/', 'public/assets/plugins/datatables/css/autoFill/');
mix.copy('node_modules/datatables.net-autofill-bs4/js/', 'public/assets/plugins/datatables/js/autoFill/');
mix.copy('node_modules/datatables.net-responsive/js/', 'public/assets/plugins/datatables/js/responsive/');
mix.copy('node_modules/datatables.net-responsive-bs4/css/', 'public/assets/plugins/datatables/css/responsive/');
mix.copy('node_modules/datatables.net-responsive-bs4/js/', 'public/assets/plugins/datatables/js/responsive/');
mix.copy('node_modules/datatables.net-buttons/js/', 'public/assets/plugins/datatables/js/buttons/');
mix.copy('node_modules/datatables.net-buttons-bs4/css/', 'public/assets/plugins/datatables/css/buttons/');
mix.copy('node_modules/datatables.net-buttons-bs4/js/', 'public/assets/plugins/datatables/js/buttons/');
mix.copy('node_modules/datatables.net-colreorder/js/', 'public/assets/plugins/datatables/js/colReorder/');
mix.copy('node_modules/datatables.net-colreorder-bs4/css/', 'public/assets/plugins/datatables/css/colReorder/');
mix.copy('node_modules/datatables.net-fixedcolumns/js/', 'public/assets/plugins/datatables/js/fixedColumns/');
mix.copy('node_modules/datatables.net-fixedcolumns-bs4/css/', 'public/assets/plugins/datatables/css/fixedColumns/');
mix.copy('node_modules/datatables.net-fixedheader/js/', 'public/assets/plugins/datatables/js/fixedHeader/');
mix.copy('node_modules/datatables.net-fixedheader-bs4/css/', 'public/assets/plugins/datatables/css/fixedHeader/');
mix.copy('node_modules/datatables.net-keytable/js/', 'public/assets/plugins/datatables/js/keyTable/');
mix.copy('node_modules/datatables.net-keytable-bs4/css/', 'public/assets/plugins/datatables/css/keyTable/');
mix.copy('node_modules/datatables.net-rowreorder/js/', 'public/assets/plugins/datatables/js/rowReorder/');
mix.copy('node_modules/datatables.net-rowreorder-bs4/css/', 'public/assets/plugins/datatables/css/rowReorder/');
mix.copy('node_modules/datatables.net-scroller/js/', 'public/assets/plugins/datatables/js/scroller/');
mix.copy('node_modules/datatables.net-scroller-bs4/css/', 'public/assets/plugins/datatables/css/scroller/');
mix.copy('node_modules/datatables.net-select/js/', 'public/assets/plugins/datatables/js/select/');
mix.copy('node_modules/datatables.net-select-bs4/css/', 'public/assets/plugins/datatables/css/select/');

// for those plugins which is not listed in npm
mix.copy('resources/assets/plugins/', 'public/assets/plugins/');