/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7 & Bootstrap 4.0.0-Alpha 6
Version: 3.0.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v3.0/admin/angularjs/
*/

var colorAdminApp = angular.module('colorAdminApp', [
    'ui.router',
    'ui.bootstrap',
    'oc.lazyLoad'
]);

colorAdminApp.config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/app/dashboard/v2');

    $stateProvider
        .state('app', {
            url: '/app',
            templateUrl: 'template/app.html',
            abstract: true
        })
        .state('app.dashboard', {
            url: '/dashboard',
            template: '<div ui-view></div>',
            abstract: true
        })
        .state('app.dashboard.v1', {
            url: '/v1',
            templateUrl: 'views/index.html',
            data: { pageTitle: 'Dashboard v1' },
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
							'../assets/plugins/jquery-jvectormap/jquery-jvectormap.css',
							'../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css',
							'../assets/plugins/gritter/css/jquery.gritter.css',
							'../assets/plugins/gritter/js/jquery.gritter.js',
							'../assets/plugins/flot/jquery.flot.min.js',
							'../assets/plugins/flot/jquery.flot.time.min.js',
							'../assets/plugins/flot/jquery.flot.resize.min.js',
							'../assets/plugins/flot/jquery.flot.pie.min.js',
							'../assets/plugins/sparkline/jquery.sparkline.js',
							'../assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js',
							'../assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js',
							'../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js',
							'../assets/js/demo/dashboard.min.js'
                        ] 
                    });
                }]
            }
        })
        .state('app.dashboard.v2', {
            url: '/v2',
            templateUrl: 'views/index_v2.html',
            data: { pageTitle: 'Dashboard v2' },
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
                            'https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.2/d3.min.js',
							'../assets/plugins/jquery-jvectormap/jquery-jvectormap.css',
							'../assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css',
							'../assets/plugins/gritter/css/jquery.gritter.css',
							'../assets/plugins/nvd3/build/nv.d3.css',
                            '../assets/plugins/nvd3/build/nv.d3.js',
                            '../assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js',
                            '../assets/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js',
                            '../assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js',
                            '../assets/plugins/gritter/js/jquery.gritter.js',
                            '../assets/js/demo/dashboard-v2.min.js'
                        ] 
                    });
                }]
            }
        })
        .state('app.email', {
            url: '/email',
            template: '<div ui-view ng-class="{ \'height-full\': setting.layout.pageContentFullHeight }"></div>',
            abstract: true
        })
        .state('app.email.inbox', {
            url: '/inbox',
            data: { pageTitle: 'Email Inbox' },
            templateUrl: 'views/email_inbox.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
            				'../assets/js/demo/email-inbox.demo.min.js'
            			]
                    })
                }]
            }
        })
        .state('app.email.compose', {
            url: '/compose',
            data: { pageTitle: 'Email Compose' },
            templateUrl: 'views/email_compose.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
                        	'../assets/plugins/jquery-tag-it/css/jquery.tagit.css',
                        	'../assets/plugins/bootstrap-wysihtml5/src/bootstrap3-wysihtml5.css',
                        	'../assets/plugins/jquery-tag-it/js/tag-it.min.js',
							'../assets/plugins/bootstrap-wysihtml5/dist/bootstrap3-wysihtml5.all.min.js',
							'../assets/js/demo/email-compose.demo.min.js'
                        ]
                    })
                }]
            }
        })
        .state('app.email.detail', {
            url: '/detail',
            data: { pageTitle: 'Email Detail' },
            templateUrl: 'views/email_detail.html'
        })
        .state('app.ui', {
            url: '/ui',
            template: '<div ui-view></div>',
            abstract: true
        })
        .state('app.ui.general', {
            url: '/general',
            data: { pageTitle: 'UI General' },
            templateUrl: 'views/ui_general.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
                            '../assets/plugins/highlight/highlight.common.js',
							'../assets/js/demo/render.highlight.js'
                        ] 
                    });
                }]
            }
        })
        .state('app.ui.typography', {
            url: '/typography',
            data: { pageTitle: 'UI Typography' },
            templateUrl: 'views/ui_typography.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
                            '../assets/plugins/highlight/highlight.common.js',
							'../assets/js/demo/render.highlight.js'
                        ] 
                    });
                }]
            }
        })
        .state('app.ui.tabsAccordions', {
            url: '/tabs-accordions',
            data: { pageTitle: 'UI Tabs & Accordions' },
            templateUrl: 'views/ui_tabs_accordions.html'
        })
        .state('app.ui.unlimitedTabs', {
            url: '/unlimited-nav-tabs',
            data: { pageTitle: 'UI Unlimited Nav Tabs' },
            templateUrl: 'views/ui_unlimited_tabs.html'
        })
        .state('app.ui.modalNotification', {
            url: '/modal-notification',
            data: { pageTitle: 'UI Modal & Notification' },
            templateUrl: 'views/ui_modal_notification.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        files: [
                            '../assets/plugins/gritter/css/jquery.gritter.css',
                            '../assets/plugins/gritter/js/jquery.gritter.js',
                            '../assets/plugins/bootstrap-sweetalert/sweetalert.min.js',
                            '../assets/js/demo/ui-modal-notification.demo.min.js'
                        ] 
                    });
                }]
            }
        })
        .state('app.ui.widgetBoxes', {
            url: '/widget-boxes',
            data: { pageTitle: 'UI Widget Boxes' },
            templateUrl: 'views/ui_widget_boxes.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
                            '../assets/plugins/highlight/highlight.common.js',
							'../assets/js/demo/render.highlight.js'
                        ] 
                    });
                }]
            }
        })
        .state('app.ui.mediaObject', {
            url: '/media-object',
            data: { pageTitle: 'UI Media Object' },
            templateUrl: 'views/ui_media_object.html'
        })
        .state('app.ui.buttons', {
            url: '/buttons',
            data: { pageTitle: 'UI Buttons' },
            templateUrl: 'views/ui_buttons.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
                            '../assets/plugins/highlight/highlight.common.js',
							'../assets/js/demo/render.highlight.js'
                        ] 
                    });
                }]
            }
        })
        .state('app.ui.icons', {
            url: '/font-awesome',
            data: { pageTitle: 'UI FontAwesome' },
            templateUrl: 'views/ui_icons.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
                            '../assets/plugins/highlight/highlight.common.js',
							'../assets/js/demo/render.highlight.js'
                        ] 
                    });
                }]
            }
        })
        .state('app.ui.simpleLineIcons', {
            url: '/simple-line-icons',
            data: { pageTitle: 'UI Simple Line Icons' },
            templateUrl: 'views/ui_simple_line_icons.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        files: [
                            '../assets/plugins/simple-line-icons/css/simple-line-icons.css'
                        ] 
                    });
                }]
            }
        })
        .state('app.ui.ionicons', {
            url: '/ionicons',
            data: { pageTitle: 'UI Ionicons' },
            templateUrl: 'views/ui_ionicons.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        files: [
                            '../assets/plugins/ionicons/css/ionicons.min.css'
                        ] 
                    });
                }]
            }
        })
        .state('app.ui.tree', {
            url: '/tree',
            data: { pageTitle: 'UI Tree View' },
            templateUrl: 'views/ui_tree.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        files: [
                            '../assets/plugins/jstree/dist/themes/default/style.min.css',
                            '../assets/plugins/jstree/dist/jstree.min.js',
                            '../assets/js/demo/ui-tree.demo.min.js'
                        ]
                    });
                }]
            }
        })
        .state('app.ui.languageBarIcon', {
            url: '/language-bar-icon',
            data: { pageTitle: 'UI Language Bar Icon' },
            templateUrl: 'views/ui_language_bar_icon.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        files: [
                            '../assets/plugins/flag-icon/css/flag-icon.css'
                        ]
                    });
                }]
            }
        })
        .state('app.ui.socialButtons', {
            url: '/social-buttons',
            data: { pageTitle: 'UI Social Buttons' },
            templateUrl: 'views/ui_social_buttons.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        files: [
                            '../assets/plugins/bootstrap-social/bootstrap-social.css'
                        ]
                    });
                }]
            }
        })
        .state('app.ui.tour', {
            url: '/tour',
            data: { pageTitle: 'Intro JS' },
            templateUrl: 'views/ui_tour.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        files: [
                            '../assets/plugins/intro-js/introjs.css',
                            '../assets/plugins/intro-js/intro.js'
                        ]
                    });
                }]
            }
        })
        .state('app.bootstrap4', {
            url: '/bootstrap4',
            data: { pageTitle: 'Bootstrap 4' },
            templateUrl: 'views/bootstrap_4.html'
        })
        .state('app.form', {
            url: '/form',
            template: '<div ui-view></div>',
            abstract: true
        })
        .state('app.form.elements', {
            url: '/elements',
            data: { pageTitle: 'Form Elements' },
            templateUrl: 'views/form_elements.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        files: [
                            '../assets/plugins/highlight/highlight.common.js',
                            '../assets/js/demo/render.highlight.js'
                        ] 
                    });
                }]
            }
        })
        .state('app.form.plugins', {
            url: '/plugins',
            data: { pageTitle: 'Form Plugins' },
            templateUrl: 'views/form_plugins.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
							'../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css',
							'../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css',
							'../assets/plugins/ionRangeSlider/css/ion.rangeSlider.css',
							'../assets/plugins/ionRangeSlider/css/ion.rangeSlider.skinNice.css',
							'../assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css',
							'../assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css',
							'../assets/plugins/password-indicator/css/password-indicator.css',
							'../assets/plugins/bootstrap-combobox/css/bootstrap-combobox.css',
							'../assets/plugins/bootstrap-select/bootstrap-select.min.css',
							'../assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css',
							'../assets/plugins/jquery-tag-it/css/jquery.tagit.css',
							'../assets/plugins/bootstrap-daterangepicker/daterangepicker.css',
							'../assets/plugins/select2/dist/css/select2.min.css',
							'../assets/plugins/bootstrap-eonasdan-datetimepicker/build/css/bootstrap-datetimepicker.min.css',
							'../assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css',
							'../assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.css',
							'../assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-fontawesome.css',
							'../assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-glyphicons.css',
							'../assets/plugins/bootstrap-daterangepicker/moment.js',
							'../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js',
							'../assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js',
							'../assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js',
							'../assets/plugins/masked-input/masked-input.min.js',
							'../assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js',
							'../assets/plugins/password-indicator/js/password-indicator.js',
							'../assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js',
							'../assets/plugins/bootstrap-select/bootstrap-select.min.js',
							'../assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js',
							'../assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js',
							'../assets/plugins/jquery-tag-it/js/tag-it.min.js',
							'../assets/plugins/bootstrap-daterangepicker/daterangepicker.js',
							'../assets/plugins/select2/dist/js/select2.min.js',
							'../assets/plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
							'../assets/plugins/bootstrap-show-password/bootstrap-show-password.js',
							'../assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js',
							'../assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js',
							'../assets/plugins/clipboard/clipboard.min.js',
							'../assets/js/demo/form-plugins.demo.min.js'
                        ] 
                    });
                }]
            }
        })
        .state('app.form.sliderSwitcher', {
            url: '/slider-switcher',
            data: { pageTitle: 'Form Slider + Switcher' },
            templateUrl: 'views/form_slider_switcher.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        files: [
                            '../assets/plugins/switchery/switchery.min.css',
                            '../assets/plugins/powerange/powerange.min.css',
                            '../assets/plugins/switchery/switchery.min.js',
                            '../assets/plugins/powerange/powerange.min.js',
                            '../assets/js/demo/form-slider-switcher.demo.min.js'
                        ] 
                    });
                }]
            }
        })
        .state('app.form.summernote', {
            url: '/summernote',
            data: { pageTitle: 'Summernote' },
            templateUrl: 'views/form_summernote.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        files: [
                            '../assets/plugins/summernote/summernote.css',
	                        '../assets/plugins/summernote/summernote.min.js',
	                        '../assets/js/demo/form-summernote.demo.min.js'
                        ] 
                    });
                }]
            }
        })
        .state('app.form.dropzone', {
            url: '/dropzone',
            data: { pageTitle: 'Dropzone' },
            templateUrl: 'views/form_dropzone.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        files: [
                            '../assets/plugins/dropzone/min/dropzone.min.css',
                            '../assets/plugins/dropzone/min/dropzone.min.js', 
                            '../assets/plugins/highlight/highlight.common.js',
                            '../assets/js/demo/render.highlight.js'
                        ] 
                    });
                }]
            }
        })
        .state('app.form.validation', {
            url: '/validation',
            data: { pageTitle: 'Form Validation' },
            templateUrl: 'views/form_validation.html'
        })
        .state('app.table', {
            url: '/table',
            template: '<div ui-view></div>',
            abstract: true
        })
        .state('app.table.basic', {
            url: '/basic',
            data: { pageTitle: 'Basic Table' },
            templateUrl: 'views/table_basic.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
                            '../assets/plugins/highlight/highlight.common.js',
							'../assets/js/demo/render.highlight.js'
                        ] 
                    });
                }]
            }
        })
        .state('app.table.manage', {
            url: '/manage',
            template: '<div ui-view></div>',
            abstract: true
        })
        .state('app.table.manage.default', {
            url: '/default',
            data: { pageTitle: 'Managed Table Default' },
            templateUrl: 'views/table_manage.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
							'../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css',
							'../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css',
							'../assets/plugins/DataTables/media/js/jquery.dataTables.js',
							'../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js',
							'../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js',
							'../assets/js/demo/table-manage-default.demo.min.js'
						]
					});
                }]
            }
        })
        .state('app.table.manage.autofill', {
            url: '/autofill',
            data: { pageTitle: 'Managed Table Autofill' },
            templateUrl: 'views/table_manage_autofill.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
                            '../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css',
                            '../assets/plugins/DataTables/extensions/AutoFill/css/autoFill.bootstrap.min.css',
                            '../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css',
                            '../assets/plugins/DataTables/media/js/jquery.dataTables.js',
                            '../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js',
                            '../assets/plugins/DataTables/extensions/AutoFill/js/dataTables.autoFill.min.js',
                            '../assets/plugins/DataTables/extensions/AutoFill/js/autoFill.bootstrap.min.js',
                            '../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js',
							'../assets/js/demo/table-manage-autofill.demo.min.js'
                        ]
                    });
                }]
            }
            
        })
        .state('app.table.manage.buttons', {
            url: '/buttons',
            data: { pageTitle: 'Managed Table Buttons' },
            templateUrl: 'views/table_manage_buttons.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
							'../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css',
							'../assets/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css',
							'../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css',
							'../assets/plugins/DataTables/media/js/jquery.dataTables.js',
							'../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js',
							'../assets/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js',
							'../assets/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js',
							'../assets/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js',
							'../assets/plugins/DataTables/extensions/Buttons/js/jszip.min.js',
							'../assets/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js',
							'../assets/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js',
							'../assets/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js',
							'../assets/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js',
							'../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js',
							'../assets/js/demo/table-manage-buttons.demo.min.js'
                        ]
                    });
                }]
            }
        })
        .state('app.table.manage.colReorder', {
            url: '/colreorder',
            data: { pageTitle: 'Managed Table ColReorder' },
            templateUrl: 'views/table_manage_colreorder.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
							'../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css',
							'../assets/plugins/DataTables/extensions/ColReorder/css/colReorder.bootstrap.min.css',
							'../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css',
							'../assets/plugins/DataTables/media/js/jquery.dataTables.js',
							'../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js',
							'../assets/plugins/DataTables/extensions/ColReorder/js/dataTables.colReorder.min.js',
							'../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js',
							'../assets/js/demo/table-manage-colreorder.demo.min.js'
                        ]
                    });
                }]
            }
        })
        .state('app.table.manage.fixedColumns', {
            url: '/fixed-column',
            data: { pageTitle: 'Managed Table Fixed Columns' },
            templateUrl: 'views/table_manage_fixed_columns.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
                            '../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css',
                            '../assets/plugins/DataTables/extensions/FixedColumns/css/fixedColumns.bootstrap.min.css',
                            '../assets/plugins/DataTables/media/js/jquery.dataTables.js',
                            '../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js',
                            '../assets/plugins/DataTables/extensions/FixedColumns/js/dataTables.fixedColumns.min.js',
                            '../assets/js/demo/table-manage-fixed-columns.demo.min.js'
                        ]
                    });
                }]
            }
        })
        .state('app.table.manage.fixedHeader', {
            url: '/fixed-header',
            data: { pageTitle: 'Managed Table Fixed Header' },
            templateUrl: 'views/table_manage_fixed_header.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
                            '../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css',
                            '../assets/plugins/DataTables/extensions/FixedHeader/css/fixedHeader.bootstrap.min.css',
                            '../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css',
                            '../assets/plugins/DataTables/media/js/jquery.dataTables.js',
                            '../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js',
                            '../assets/plugins/DataTables/extensions/FixedHeader/js/dataTables.fixedHeader.min.js',
                            '../assets/js/demo/table-manage-fixed-header.demo.min.js'
                        ]
                    });
                }]
            }
        })
        .state('app.table.manage.keyTable', {
            url: '/keytable',
            data: { pageTitle: 'Managed Table KeyTable' },
            templateUrl: 'views/table_manage_keytable.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
                            '../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css',
                            '../assets/plugins/DataTables/extensions/KeyTable/css/keyTable.bootstrap.min.css',
                            '../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css',
                            '../assets/plugins/DataTables/media/js/jquery.dataTables.js',
                            '../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js',
                            '../assets/plugins/DataTables/extensions/KeyTable/js/dataTables.keyTable.min.js',
                            '../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js',
                            '../assets/js/demo/table-manage-keytable.demo.min.js'
                        ]
                    });
                }]
            }
        })
        .state('app.table.manage.responsive', {
            url: '/responsive',
            data: { pageTitle: 'Managed Table Responsive' },
            templateUrl: 'views/table_manage_responsive.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
                            '../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css',
                            '../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css',
                            '../assets/plugins/DataTables/media/js/jquery.dataTables.js',
                            '../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js',
                            '../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js',
                            '../assets/js/demo/table-manage-responsive.demo.min.js'
                        ]
                    });
                }]
            }
        })
        .state('app.table.manage.rowReorder', {
            url: '/rowreorder',
            data: { pageTitle: 'Managed Table RowReorder' },
            templateUrl: 'views/table_manage_rowreorder.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
                            '../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css',
                            '../assets/plugins/DataTables/extensions/RowReorder/css/rowReorder.bootstrap.min.css',
                            '../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css',
                            '../assets/plugins/DataTables/media/js/jquery.dataTables.js',
                            '../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js',
                            '../assets/plugins/DataTables/extensions/RowReorder/js/dataTables.rowReorder.min.js',
                            '../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js',
                            '../assets/js/demo/table-manage-rowreorder.demo.min.js'
                        ]
                    });
                }]
            }
        })
        .state('app.table.manage.scroller', {
            url: '/scroller',
            data: { pageTitle: 'Managed Table Scroller' },
            templateUrl: 'views/table_manage_scroller.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
                            '../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css',
                            '../assets/plugins/DataTables/extensions/Scroller/css/scroller.bootstrap.min.css',
                            '../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css',
                            '../assets/plugins/DataTables/media/js/jquery.dataTables.js',
                            '../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js',
                            '../assets/plugins/DataTables/extensions/Scroller/js/dataTables.scroller.min.js',
                            '../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js',
                            '../assets/js/demo/table-manage-scroller.demo.min.js'
                        ]
                    });
                }]
            }
        })
        .state('app.table.manage.select', {
            url: '/select',
            data: { pageTitle: 'Managed Table Select' },
            templateUrl: 'views/table_manage_select.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
                            '../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css',
                            '../assets/plugins/DataTables/extensions/Select/css/select.bootstrap.min.css',
                            '../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css',
                            '../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js',
                            '../assets/plugins/DataTables/extensions/Select/js/dataTables.select.min.js',
                            '../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js',
                            '../assets/js/demo/table-manage-select.demo.min.js'
                        ]
                    });
                }]
            }
        })
        .state('app.table.manage.combine', {
            url: '/combine',
            data: { pageTitle: 'Managed Table Extension Combination' },
            templateUrl: 'views/table_manage_combine.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
							'../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css',
							'../assets/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css',
							'../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css',
							'../assets/plugins/DataTables/extensions/AutoFill/css/autoFill.bootstrap.min.css',
							'../assets/plugins/DataTables/extensions/ColReorder/css/colReorder.bootstrap.min.css',
							'../assets/plugins/DataTables/extensions/KeyTable/css/keyTable.bootstrap.min.css',
							'../assets/plugins/DataTables/extensions/RowReorder/css/rowReorder.bootstrap.min.css',
							'../assets/plugins/DataTables/extensions/Select/css/select.bootstrap.min.css',
							'../assets/plugins/DataTables/media/js/jquery.dataTables.js',
							'../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js',
							'../assets/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js',
							'../assets/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js',
							'../assets/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js',
							'../assets/plugins/DataTables/extensions/Buttons/js/jszip.min.js',
							'../assets/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js',
							'../assets/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js',
							'../assets/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js',
							'../assets/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js',
							'../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js',
							'../assets/plugins/DataTables/extensions/AutoFill/js/dataTables.autoFill.min.js',
							'../assets/plugins/DataTables/extensions/ColReorder/js/dataTables.colReorder.min.js',
							'../assets/plugins/DataTables/extensions/KeyTable/js/dataTables.keyTable.min.js',
							'../assets/plugins/DataTables/extensions/RowReorder/js/dataTables.rowReorder.min.js',
							'../assets/plugins/DataTables/extensions/Select/js/dataTables.select.min.js',
							'../assets/js/demo/table-manage-combine.demo.min.js'
                        ]
                    });
                }]
            }
        })
        .state('app.chart', {
            url: '/chart',
            template: '<div ui-view></div>',
            abstract: true
        })
        .state('app.chart.flot', {
            url: '/flot',
            data: { pageTitle: 'Flot Chart' },
            templateUrl: 'views/chart_flot.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
                            '../assets/plugins/flot/jquery.flot.min.js',
                            '../assets/plugins/flot/jquery.flot.time.min.js',
                            '../assets/plugins/flot/jquery.flot.resize.min.js',
                            '../assets/plugins/flot/jquery.flot.pie.min.js',
                            '../assets/plugins/flot/jquery.flot.stack.min.js',
                            '../assets/plugins/flot/jquery.flot.crosshair.min.js',
                            '../assets/plugins/flot/jquery.flot.categories.js',
                            '../assets/js/demo/chart-flot.demo.min.js',
                        ]
                    })
                }]
            }
        })
        .state('app.chart.morris', {
            url: '/morris',
            data: { pageTitle: 'Morris Chart' },
            templateUrl: 'views/chart_morris.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        files: [
                            '../assets/plugins/morris/morris.css',
                            '../assets/plugins/morris/raphael.min.js',
                            '../assets/plugins/morris/morris.js',
                            '../assets/js/demo/chart-morris.demo.min.js'
                        ]
                    })
                }]
            }
        })
        .state('app.chart.js', {
            url: '/chart-js',
            data: { pageTitle: 'Chart JS' },
            templateUrl: 'views/chart_js.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
                            '../assets/plugins/chart-js/Chart.min.js',
                            '../assets/js/demo/chart-js.demo.min.js'
                        ]
                    })
                }]
            }
        })
        .state('app.chart.d3', {
            url: '/chart-d3',
            data: { pageTitle: 'Chart d3' },
            templateUrl: 'views/chart_d3.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
                            '../assets/plugins/nvd3/build/nv.d3.css',
                            'https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.2/d3.min.js',
                            '../assets/plugins/nvd3/build/nv.d3.js',
                            '../assets/js/demo/chart-d3.demo.min.js'
                        ]
                    })
                }]
            }
        })
        .state('app.calendar', {
            url: '/calendar',
            data: { pageTitle: 'Calendar' },
            templateUrl: 'views/calendar.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
                        	'../assets/plugins/fullcalendar/fullcalendar.min.css',
                        	'../assets/plugins/fullcalendar/lib/moment.min.js',
							'../assets/plugins/fullcalendar/fullcalendar.min.js',
							'../assets/js/demo/calendar.demo.min.js'
                        ]
                    })
                }]
            }
        })
        .state('app.map', {
            url: '/map',
            template: '<div ui-view></div>',
            abstract: true
        })
        .state('app.map.vector', {
            url: '/vector',
            data: { pageTitle: 'Vector Map' },
            templateUrl: 'views/map_vector.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
                            '../assets/plugins/jquery-jvectormap/jquery-jvectormap.css',
                            '../assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js',
                            '../assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js',
                            '../assets/js/demo/map-vector.demo.min.js'
                        ]
                    })
                }]
            }
        })
        .state('app.map.google', {
            url: '/google',
            data: { pageTitle: 'Google Map' },
            templateUrl: 'views/map_google.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
                            'https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false',
                            '../assets/js/demo/map-google.demo.js'
                        ]
                    })
                }]
            }
        })
        .state('app.gallery', {
            url: '/gallery',
            template: '<div ui-view></div>',
            abstract: true
        })
        .state('app.gallery.v1', {
            url: '/v1',
            data: { pageTitle: 'Gallery V1' },
            templateUrl: 'views/gallery.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
                            '../assets/plugins/isotope/isotope.css',
                            '../assets/plugins/lightbox/css/lightbox.css',
                            '../assets/plugins/isotope/jquery.isotope.min.js',
                            '../assets/plugins/lightbox/js/lightbox.min.js',
                            '../assets/js/demo/gallery.demo.min.js'
                        ]
                    })
                }]
            }
        })
        .state('app.gallery.v2', {
            url: '/v2',
            data: { pageTitle: 'Gallery V2' },
            templateUrl: 'views/gallery_v2.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        serie: true,
                        files: [
                        	'../assets/plugins/superbox/css/superbox.min.css',
                            '../assets/plugins/superbox/js/jquery.superbox.min.js',
                            '../assets/js/demo/gallery-v2.demo.min.js'
                        ]
                    })
                }]
            }
        })
        .state('app.options', {
            url: '/options',
            template: '<div ui-view ng-class="{ \'height-full\': setting.layout.pageContentFullHeight }"></div>',
            abstract: true
        })
        .state('app.options.pageBlank', {
            url: '/blank',
            data: { pageTitle: 'Blank Page' },
            templateUrl: 'views/page_blank.html'
        })
        .state('app.options.pageWithFooter', {
            url: '/with-footer',
            data: { pageTitle: 'Page with Footer' },
            templateUrl: 'views/page_with_footer.html'
        })
        .state('app.options.pageWithoutSidebar', {
            url: '/without-sidebar',
            data: { pageTitle: 'Page without Sidebar' },
            templateUrl: 'views/page_without_sidebar.html'
        })
        .state('app.options.pageWithRightSidebar', {
            url: '/right-sidebar',
            data: { pageTitle: 'Page with Right Sidebar' },
            templateUrl: 'views/page_with_right_sidebar.html'
        })
        .state('app.options.pageWithMinifiedSidebar', {
            url: '/minified-sidebar',
            data: { pageTitle: 'Page with Minified Sidebar' },
            templateUrl: 'views/page_with_minified_sidebar.html'
        })
        .state('app.options.pageWithTwoSidebar', {
            url: '/two-sidebar',
            data: { pageTitle: 'Page with Two Sidebar' },
            templateUrl: 'views/page_with_two_sidebar.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        files: [
                            '../assets/plugins/sparkline/jquery.sparkline.js',
                            '../assets/plugins/jquery-knob/js/jquery.knob.js',
                            '../assets/js/demo/page-with-two-sidebar.demo.min.js'
                        ]
                    })
                }]
            }
        })
        .state('app.options.pageFullHeightContent', {
            url: '/full-height-content',
            data: { pageTitle: 'Full Height Content' },
            templateUrl: 'views/page_full_height.html'
        })
        .state('app.options.pageWithWideSidebar', {
            url: '/wide-sidebar',
            data: { pageTitle: 'Page with Wide Sidebar' },
            templateUrl: 'views/page_with_wide_sidebar.html'
        })
        .state('app.options.pageWithLightSidebar', {
            url: '/light-sidebar',
            data: { pageTitle: 'Page with Light Sidebar' },
            templateUrl: 'views/page_with_light_sidebar.html'
        })
        .state('app.options.pageWithMegaMenu', {
            url: '/light-sidebar',
            data: { pageTitle: 'Page with Mega Menu' },
            templateUrl: 'views/page_with_mega_menu.html'
        })
        .state('app.options.pageWithTopMenu', {
            url: '/top-menu',
            data: { pageTitle: 'Page with Top Menu' },
            templateUrl: 'views/page_with_top_menu.html'
        })
        .state('app.options.pageWithMixedMenu', {
            url: '/mixed-menu',
            data: { pageTitle: 'Page with Mixed Menu' },
            templateUrl: 'views/page_with_mixed_menu.html'
        })
        .state('app.options.pageWithBoxedLayout', {
            url: '/boxed-layout',
            data: { pageTitle: 'Page with Boxed Layout' },
            templateUrl: 'views/page_with_boxed_layout.html'
        })
        .state('app.options.pageWithBoxedMixedMenu', {
            url: '/boxed-mixed-menu',
            data: { pageTitle: 'Page with Mixed Menu Boxed Layout' },
            templateUrl: 'views/page_boxed_layout_with_mixed_menu.html'
        })
        .state('app.options.pageWithTransparentSidebar', {
            url: '/transparent-sidebar',
            data: { pageTitle: 'Page with Transparent Sidebar' },
            templateUrl: 'views/page_with_transparent_sidebar.html'
        })
        .state('app.extra', {
            url: '/extra',
            template: '<div ui-view></div>',
            abstract: true
        })
        .state('app.extra.timeline', {
            url: '/timeline',
            data: { pageTitle: 'Timeline' },
            templateUrl: 'views/extra_timeline.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        files: [
                            'https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false',
                            '../assets/js/demo/timeline.demo.min.js'
                        ]
                    })
                }]
            }
        })
        .state('app.extra.searchResults', {
            url: '/search-results',
            data: { pageTitle: 'Search Results' },
            templateUrl: 'views/extra_search_results.html'
        })
        .state('app.extra.invoice', {
            url: '/invoice',
            data: { pageTitle: 'Invoice' },
            templateUrl: 'views/extra_invoice.html'
        })
        .state('app.extra.profile', {
            url: '/profile',
            data: { pageTitle: 'Profile' },
            templateUrl: 'views/extra_profile.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        files: [
                            '../assets/plugins/superbox/css/superbox.min.css',
                            '../assets/plugins/lity/dist/lity.min.css',
                            'https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false',
                            '../assets/plugins/superbox/js/jquery.superbox.min.js',
                            '../assets/plugins/lity/dist/lity.min.js',
                            '../assets/js/demo/profile.demo.min.js'
                        ]
                    })
                }]
            }
        })
        .state('comingSoon', {
            url: '/coming-soon',
            data: { pageTitle: 'Coming Soon' },
            templateUrl: 'views/extra_coming_soon.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        files: [
                            '../assets/plugins/jquery.countdown/jquery.countdown.css',
                            '../assets/plugins/jquery.countdown/jquery.plugin.js',
                            '../assets/plugins/jquery.countdown/jquery.countdown.js',
                            '../assets/js/demo/coming-soon.demo.min.js'
                        ]
                    })
                }]
            }
        })
        .state('error', {
            url: '/error',
            data: { pageTitle: '404 Error' },
            templateUrl: 'views/extra_404_error.html'
        })
        .state('member', {
            url: '/member',
            template: '<div ui-view></div>',
            abstract: true
        })
        .state('member.login', {
            url: '/login',
            template: '<div ui-view></div>',
            abstract: true
        })
        .state('member.login.v1', {
            url: '/v1',
            data: { pageTitle: 'Login' },
            templateUrl: 'views/login.html'
        })
        .state('member.login.v2', {
            url: '/v2',
            data: { pageTitle: 'Login V2' },
            templateUrl: 'views/login_v2.html',
            resolve: {
                service: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        files: [
                            '../assets/js/demo/login-v2.demo.min.js'
                        ]
                    })
                }]
            }
        })
        .state('member.login.v3', {
            url: '/v3',
            data: { pageTitle: 'Login V3' },
            templateUrl: 'views/login_v3.html'
        })
        .state('member.register', {
            url: '/register',
            data: { pageTitle: 'Register V3' },
            templateUrl: 'views/register_v3.html'
        })
        .state('app.helper', {
            url: '/helper',
            template: '<div ui-view></div>',
            abstract: true
        })
        .state('app.helper.css', {
            url: '/css',
            data: { pageTitle: 'Predefined CSS Classes' },
            templateUrl: 'views/helper_css.html'
        })
}]);

colorAdminApp.run(['$rootScope', '$state', 'setting', function($rootScope, $state, setting) {
    $rootScope.$state = $state;
    $rootScope.setting = setting;
}]);