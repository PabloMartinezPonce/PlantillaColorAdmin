/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7 & Bootstrap 4.0.0-Alpha 6
Version: 3.0.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v3.0/admin/angularjs/
    ----------------------------
        APPS CONTROLLER TABLE
    ----------------------------
	 1.0 CONTROLLER - App
	 
	 2.0 CONTROLLER - Sidebar
	 3.0 CONTROLLER - Right Sidebar
	 4.0 CONTROLLER - Header
	 5.0 CONTROLLER - Top Menu
	 6.0 CONTROLLER - Page Loader
	 7.0 CONTROLLER - Theme Panel
	 
	 8.0 CONTROLLER - Dashboard v1
	 9.0 CONTROLLER - Dashboard v2
	 
	10.0 CONTROLLER - Email Inbox
	11.0 CONTROLLER - Email Compose
	12.0 CONTROLLER - Email Detail
	
	13.0 CONTROLLER - UI Widget Boxes
	14.0 CONTROLLER - UI Typography
	15.0 CONTROLLER - UI Icons
	16.0 CONTROLLER - UI General
	17.0 CONTROLLER - UI Buttons
	18.0 CONTROLLER - UI Modal Notification
	19.0 CONTROLLER - UI Tree
	20.0 CONTROLLER - UI Language Bar
	
	21.0 CONTROLLER - Form Plugins
	22.0 CONTROLLER - Form Slider + Switcher
	23.0 CONTROLLER - Form Validation
	24.0 CONTROLLER - Form Elements
	25.0 CONTROLLER - Form Dropzone
	26.0 CONTROLLER - Summernote
	
	27.0 CONTROLLER - Table Basic
	28.0 CONTROLLER - Table Manage Default
	29.0 CONTROLLER - Table Manage Autofill
	30.0 CONTROLLER - Table Manage Buttons
	31.0 CONTROLLER - Table Manage ColReorder
	32.0 CONTROLLER - Table Manage Fixed Columns
	33.0 CONTROLLER - Table Manage Fixed Header
	34.0 CONTROLLER - Table Manage KeyTable
	35.0 CONTROLLER - Table Manage Responsive
	36.0 CONTROLLER - Table Manage RowReorder
	37.0 CONTROLLER - Table Manage Scroller
	38.0 CONTROLLER - Table Manage Select
	39.0 CONTROLLER - Table Manage Extension Combination
	
	40.0 CONTROLLER - Flot Chart
	41.0 CONTROLLER - Morris Chart
	42.0 CONTROLLER - Chart JS
	43.0 CONTROLLER - Chart d3
	
	44.0 CONTROLLER - Calendar
	
	45.0 CONTROLLER - Vector Map
	46.0 CONTROLLER - Google Map
	
	47.0 CONTROLLER - Gallery V1
	48.0 CONTROLLER - Gallery V2
	
	49.0 CONTROLLER - Page with Footer
	50.0 CONTROLLER - Page without Sidebar
	51.0 CONTROLLER - Page with Right Sidebar
	52.0 CONTROLLER - Page with Minified Sidebar
	53.0 CONTROLLER - Page with Two Sidebar
	54.0 CONTROLLER - Full Height Content
	55.0 CONTROLLER - Page with Wide Sidebar
	56.0 CONTROLLER - Page with Light Sidebar
	57.0 CONTROLLER - Page with Mega Menu
	58.0 CONTROLLER - Page with Top Menu
	59.0 CONTROLLER - Page with Boxed Layout
	60.0 CONTROLLER - Page with Mixed Menu
	61.0 CONTROLLER - Page Boxed Layout with Mixed Menu
	62.0 CONTROLLER - Page with Transparent Sidebar
	
	63.0 CONTROLLER - Timeline
	64.0 CONTROLLER - Coming Soon
	65.0 CONTROLLER - Profile Page
	66.0 CONTROLLER - 404 Error
	
	67.0 CONTROLLER - Login V1
	68.0 CONTROLLER - Login V2
	69.0 CONTROLLER - Login V3
	70.0 CONTROLLER - Register V3
    <!-- ======== GLOBAL SCRIPT SETTING ======== -->
*/

/* -------------------------------
   1.0 CONTROLLER - App
------------------------------- */
colorAdminApp.controller('appController', ['$rootScope', '$scope', function($rootScope, $scope) {
    $scope.$on('$includeContentLoaded', function() {
        handleSlimScroll();
    });
    $scope.$on('$viewContentLoaded', function() {
    });
    $scope.$on('$stateChangeStart', function() {
        // reset layout setting
        $rootScope.setting.layout.pageSidebarMinified = false;
        $rootScope.setting.layout.pageFixedFooter = false;
        $rootScope.setting.layout.pageRightSidebar = false;
        $rootScope.setting.layout.pageTwoSidebar = false;
        $rootScope.setting.layout.pageTopMenu = false;
        $rootScope.setting.layout.pageBoxedLayout = false;
        $rootScope.setting.layout.pageWithoutSidebar = false;
        $rootScope.setting.layout.pageContentFullHeight = false;
        $rootScope.setting.layout.pageContentFullWidth = false;
        $rootScope.setting.layout.paceTop = false;
        $rootScope.setting.layout.pageLanguageBar = false;
        $rootScope.setting.layout.pageSidebarTransparent = false;
        $rootScope.setting.layout.pageWideSidebar = false;
        $rootScope.setting.layout.pageLightSidebar = false;
        $rootScope.setting.layout.pageWithFooter = false;
        $rootScope.setting.layout.pageMegaMenu = false;
        $rootScope.setting.layout.pageWithoutHeader = false;
        $rootScope.setting.layout.pageBgWhite = false;
        $rootScope.setting.layout.pageContentInverseMode = false;
        
        App.scrollTop();
        $('.pace .pace-progress').addClass('hide');
        $('.pace').removeClass('pace-inactive');
    });
    $scope.$on('$stateChangeSuccess', function() {
        Pace.restart();
        App.initPageLoad();
        App.initSidebarSelection();
        App.initSidebarMobileSelection();
        setTimeout(function() {
            App.initLocalStorage();
            App.initComponent();
        },0);
        if ($('#top-menu').length !== 0) {
        	$('#top-menu').removeAttr('style');
        }
    });
    $scope.$on('$stateNotFound', function() {
        Pace.stop();
    });
    $scope.$on('$stateChangeError', function() {
        Pace.stop();
    });
}]);


/* -------------------------------
   2.0 CONTROLLER - Sidebar
------------------------------- */
colorAdminApp.controller('sidebarController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
    	App.initSidebar();
    });
});


/* -------------------------------
   3.0 CONTROLLER - Right Sidebar
------------------------------- */
colorAdminApp.controller('rightSidebarController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
		PageWithTwoSidebar.init();
	});
});


/* -------------------------------
   4.0 CONTROLLER - Header
------------------------------- */
colorAdminApp.controller('headerController', function($scope, $rootScope, $state) {
});


/* -------------------------------
   5.0 CONTROLLER - Top Menu
------------------------------- */
colorAdminApp.controller('topMenuController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
        App.initTopMenu();
    });
});


/* -------------------------------
   6.0 CONTROLLER - Page Loader
------------------------------- */
colorAdminApp.controller('pageLoaderController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
    	App.initPageLoad();
    });
});


/* -------------------------------
   7.0 CONTROLLER - Theme Panel
------------------------------- */
colorAdminApp.controller('themePanelController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
    	App.initThemePanel();
    });
});


/* -------------------------------
   8.0 CONTROLLER - Dashboard v1
------------------------------- */
colorAdminApp.controller('dashboardController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
        Dashboard.init();
    });
});


/* -------------------------------
   9.0 CONTROLLER - Dashboard v2
------------------------------- */
colorAdminApp.controller('dashboardV2Controller', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
        DashboardV2.init();
    });
});


/* -------------------------------
   10.0 CONTROLLER - Email Inbox
------------------------------- */
colorAdminApp.controller('emailInboxController', function($scope, $rootScope, $state) {
    $rootScope.setting.layout.pageContentFullWidth = true;
    $rootScope.setting.layout.pageContentFullHeight = true;
    
    angular.element(document).ready(function () {
    	InboxV2.init();
    });
});


/* -------------------------------
   11.0 CONTROLLER - Email Compose
------------------------------- */
colorAdminApp.controller('emailComposeController', function($scope, $rootScope, $state) {
    $rootScope.setting.layout.pageContentFullWidth = true;
    $rootScope.setting.layout.pageContentFullHeight = true;
    
    angular.element(document).ready(function () {
        EmailCompose.init();
    });
});


/* -------------------------------
   12.0 CONTROLLER - Email Detail
------------------------------- */
colorAdminApp.controller('emailDetailController', function($scope, $rootScope, $state) {
    $rootScope.setting.layout.pageContentFullWidth = true;
    $rootScope.setting.layout.pageContentFullHeight = true;
});


/* -------------------------------
   13.0 CONTROLLER - UI Widget Boxes
------------------------------- */
colorAdminApp.controller('uiWidgetBoxesController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
    	Highlight.init();
    });
});


/* -------------------------------
   14.0 CONTROLLER - UI Typography
------------------------------- */
colorAdminApp.controller('uiTypographyController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
    	Highlight.init();
    });
});


/* -------------------------------
   15.0 CONTROLLER - UI Icons
------------------------------- */
colorAdminApp.controller('uiIconsController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
    	Highlight.init();
    });
});


/* -------------------------------
   16.0 CONTROLLER - UI General
------------------------------- */
colorAdminApp.controller('uiGeneralController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
    	Highlight.init();
    });
});


/* -------------------------------
   17.0 CONTROLLER - UI Buttons
------------------------------- */
colorAdminApp.controller('uiButtonsController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
    	Highlight.init();
    });
});


/* -------------------------------
   18.0 CONTROLLER - UI Modal Notification
------------------------------- */
colorAdminApp.controller('uiModalNotificationController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
    	Notification.init();
    });
});


/* -------------------------------
   19.0 CONTROLLER - UI Tree
------------------------------- */
colorAdminApp.controller('uiTreeController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
    	TreeView.init();
    });
});


/* -------------------------------
   20.0 CONTROLLER - UI Language Bar
------------------------------- */
colorAdminApp.controller('uiLanguageBarIconController', function($scope, $rootScope, $state) {
    $rootScope.setting.layout.pageLanguageBar = true;
});


/* -------------------------------
   21.0 CONTROLLER - Form Plugins
------------------------------- */
colorAdminApp.controller('formPluginsController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
    	FormPlugins.init();
    });
});


/* -------------------------------
   22.0 CONTROLLER - Form Slider + Switcher
------------------------------- */
colorAdminApp.controller('formSliderSwitcherController', function($scope, $rootScope, $state) {   
    angular.element(document).ready(function () {
    	FormSliderSwitcher.init();
    });
});


/* -------------------------------
   23.0 CONTROLLER - Form Validation
------------------------------- */
colorAdminApp.controller('formValidationController', function($scope, $rootScope, $state) {
    $scope.submitForm = function(form) {
        if (!form.$valid) {
            $('form[name="'+ form.$name +'"] *').tooltip('dispose');
            angular.forEach(form.$error, function(field) {
                angular.forEach(field, function(errorField) {
                    errorField.$setTouched();
                    var targetContainer = 'form[name="'+ form.$name +'"] [name="'+ errorField.$name +'"]';
                    var targetMessage = (errorField.$error.required) ? 'This is required' : '';
                        targetMessage = (errorField.$error.email) ? 'Invalid email' : targetMessage;
                        targetMessage = (errorField.$error.url) ? 'Invalid website url' : targetMessage;
                        targetMessage = (errorField.$error.number) ? 'Only number is allowed' : targetMessage;
                        targetMessage = (errorField.$name == 'alphabets') ? 'Only alphabets is allowed' : targetMessage;
                        targetMessage = (errorField.$error.minlength) ? 'You must provide at least 20 characters for this field' : targetMessage;
                        targetMessage = (errorField.$error.maxlength) ? 'You must not exceed the maximum of 200 characters for this field' : targetMessage;
                        
                    $(targetContainer).first().tooltip({
                        placement: 'top',
                        trigger: 'normal',
                        title: targetMessage,
                        container: 'body',
                        animation: false
                    });
                    $(targetContainer).first().tooltip('show');
                });
            });
        }
    };
});


/* -------------------------------
   24.0 CONTROLLER - Form Elements
------------------------------- */
colorAdminApp.controller('formElementsController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
		Highlight.init();
	});
});


/* -------------------------------
   25.0 CONTROLLER - Form Dropzone
------------------------------- */
colorAdminApp.controller('dropzoneController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
		Highlight.init();
		new Dropzone("#demo-upload");
	});
});


/* -------------------------------
   26.0 CONTROLLER - Summernote
------------------------------- */
colorAdminApp.controller('summernoteController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
        FormSummernote.init();
    });
});


/* -------------------------------
   27.0 CONTROLLER - Table Basic
------------------------------- */
colorAdminApp.controller('tableBasicController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
    	Highlight.init();
    });
});


/* -------------------------------
   28.0 CONTROLLER - Table Manage Default
------------------------------- */
colorAdminApp.controller('tableManageDefaultController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
        TableManageDefault.init();
    });
});


/* -------------------------------
   29.0 CONTROLLER - Table Manage Autofill
------------------------------- */
colorAdminApp.controller('tableManageAutofillController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
        TableManageAutofill.init();
    });
});


/* -------------------------------
   30.0 CONTROLLER - Table Manage Buttons
------------------------------- */
colorAdminApp.controller('tableManageButtonsController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
        TableManageButtons.init();
    });
});


/* -------------------------------
   31.0 CONTROLLER - Table Manage ColReorder
------------------------------- */
colorAdminApp.controller('tableManageColReorderController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
        TableManageColReorder.init();
    });
});


/* -------------------------------
   32.0 CONTROLLER - Table Manage Fixed Columns
------------------------------- */
colorAdminApp.controller('tableManageFixedColumnsController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
        TableManageFixedColumns.init();
    });
});


/* -------------------------------
   33.0 CONTROLLER - Table Manage Fixed Header
------------------------------- */
colorAdminApp.controller('tableManageFixedHeaderController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
        TableManageFixedHeader.init();
    });
});


/* -------------------------------
   34.0 CONTROLLER - Table Manage KeyTable
------------------------------- */
colorAdminApp.controller('tableManageKeyTableController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
        TableManageKeyTable.init();
    });
});


/* -------------------------------
   35.0 CONTROLLER - Table Manage Responsive
------------------------------- */
colorAdminApp.controller('tableManageResponsiveController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
        TableManageResponsive.init();
    });
});


/* -------------------------------
   36.0 CONTROLLER - Table Manage RowReorder
------------------------------- */
colorAdminApp.controller('tableManageRowReorderController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
        TableManageRowReorder.init();
    });
});


/* -------------------------------
   37.0 CONTROLLER - Table Manage Scroller
------------------------------- */
colorAdminApp.controller('tableManageScrollerController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
        TableManageScroller.init();
    });
});


/* -------------------------------
   38.0 CONTROLLER - Table Manage Select
------------------------------- */
colorAdminApp.controller('tableManageSelectController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
        TableManageTableSelect.init();
    });
});


/* -------------------------------
   39.0 CONTROLLER - Table Manage Extension Combination
------------------------------- */
colorAdminApp.controller('tableManageCombineController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
        TableManageCombine.init();
    });
});


/* -------------------------------
   40.0 CONTROLLER - Flot Chart
------------------------------- */
colorAdminApp.controller('chartFlotController', function($scope, $rootScope, $state) {
    
    angular.element(document).ready(function() {
    	Chart.init();
    });
});


/* -------------------------------
   41.0 CONTROLLER - Morris Chart
------------------------------- */
colorAdminApp.controller('chartMorrisController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
    	MorrisChart.init();
    });
});


/* -------------------------------
   42.0 CONTROLLER - Chart JS
------------------------------- */
colorAdminApp.controller('chartJsController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function() {
    	ChartJs.init();
    });
});


/* -------------------------------
   43.0 CONTROLLER - Chart d3
------------------------------- */
colorAdminApp.controller('chartD3Controller', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
    	ChartNvd3.init();
    });
});


/* -------------------------------
   44.0 CONTROLLER - Calendar
------------------------------- */
colorAdminApp.controller('calendarController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
    	Calendar.init();
    });
});


/* -------------------------------
   45.0 CONTROLLER - Vector Map
------------------------------- */
colorAdminApp.controller('mapVectorController', function($scope, $rootScope, $state) {
    $rootScope.setting.layout.pageContentFullWidth = true;
    $rootScope.setting.layout.pageContentInverseMode = true;
    
    angular.element(document).ready(function () {
       MapVector.init();
    });
});


/* -------------------------------
   46.0 CONTROLLER - Google Map
------------------------------- */
colorAdminApp.controller('mapGoogleController', function($scope, $rootScope, $state) {
    $rootScope.setting.layout.pageContentFullWidth = true;
    
    angular.element(document).ready(function () {
    	MapGoogle.init();
    });
});


/* -------------------------------
   47.0 CONTROLLER - Gallery V1
------------------------------- */
colorAdminApp.controller('galleryController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
		Gallery.init();
    });
});


/* -------------------------------
   48.0 CONTROLLER - Gallery V2
------------------------------- */
colorAdminApp.controller('galleryV2Controller', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
	    GalleryV2.init();
	});
});


/* -------------------------------
   49.0 CONTROLLER - Page with Footer
------------------------------- */
colorAdminApp.controller('pageWithFooterController', function($scope, $rootScope, $state) {
    $rootScope.setting.layout.pageWithFooter = true;
});


/* -------------------------------
   50.0 CONTROLLER - Page without Sidebar
------------------------------- */
colorAdminApp.controller('pageWithoutSidebarController', function($scope, $rootScope, $state) {
    $rootScope.setting.layout.pageWithoutSidebar = true;
});


/* -------------------------------
   51.0 CONTROLLER - Page with Right Sidebar
------------------------------- */
colorAdminApp.controller('pageWithRightSidebarController', function($scope, $rootScope, $state) {
    $rootScope.setting.layout.pageRightSidebar = true;
});


/* -------------------------------
   52.0 CONTROLLER - Page with Minified Sidebar
------------------------------- */
colorAdminApp.controller('pageWithMinifiedSidebarController', function($scope, $rootScope, $state) {
    $rootScope.setting.layout.pageSidebarMinified = true;
});


/* -------------------------------
   53.0 CONTROLLER - Page with Two Sidebar
------------------------------- */
colorAdminApp.controller('pageWithTwoSidebarController', function($scope, $rootScope, $state) {
    $rootScope.setting.layout.pageTwoSidebar = true;
});


/* -------------------------------
   54.0 CONTROLLER - Full Height Content
------------------------------- */
colorAdminApp.controller('pageFullHeightContentController', function($scope, $rootScope, $state) {
    $rootScope.setting.layout.pageContentFullHeight = true;
    $rootScope.setting.layout.pageContentFullWidth = true;
});


/* -------------------------------
   55.0 CONTROLLER - Page with Wide Sidebar
------------------------------- */
colorAdminApp.controller('pageWithWideSidebarController', function($scope, $rootScope, $state) {
    $rootScope.setting.layout.pageWideSidebar = true;
});


/* -------------------------------
   56.0 CONTROLLER - Page with Light Sidebar
------------------------------- */
colorAdminApp.controller('pageWithLightSidebarController', function($scope, $rootScope, $state) {
    $rootScope.setting.layout.pageLightSidebar = true;
});


/* -------------------------------
   57.0 CONTROLLER - Page with Mega Menu
------------------------------- */
colorAdminApp.controller('pageWithMegaMenuController', function($scope, $rootScope, $state) {
    $rootScope.setting.layout.pageMegaMenu = true;
});


/* -------------------------------
   58.0 CONTROLLER - Page with Top Menu
------------------------------- */
colorAdminApp.controller('pageWithTopMenuController', function($scope, $rootScope, $state) {
    $rootScope.setting.layout.pageTopMenu = true;
    $rootScope.setting.layout.pageWithoutSidebar = true;
});


/* -------------------------------
   59.0 CONTROLLER - Page with Boxed Layout
------------------------------- */
colorAdminApp.controller('pageWithBoxedLayoutController', function($scope, $rootScope, $state) {
    $rootScope.setting.layout.pageBoxedLayout = true;
});


/* -------------------------------
   60.0 CONTROLLER - Page with Mixed Menu
------------------------------- */
colorAdminApp.controller('pageWithMixedMenuController', function($scope, $rootScope, $state) {
    $rootScope.setting.layout.pageTopMenu = true;
});


/* -------------------------------
   61.0 CONTROLLER - Page Boxed Layout with Mixed Menu
------------------------------- */
colorAdminApp.controller('pageBoxedLayoutWithMixedMenuController', function($scope, $rootScope, $state) {
    $rootScope.setting.layout.pageBoxedLayout = true;
    $rootScope.setting.layout.pageTopMenu = true;
});


/* -------------------------------
   62.0 CONTROLLER - Page with Transparent Sidebar
------------------------------- */
colorAdminApp.controller('pageWithTransparentSidebarController', function($scope, $rootScope, $state) {
    $rootScope.setting.layout.pageSidebarTransparent = true;
});


/* -------------------------------
   63.0 CONTROLLER - Timeline
------------------------------- */
colorAdminApp.controller('extraTimelineController', function($scope, $rootScope, $state) {
    angular.element(document).ready(function () {
    	Timeline.init();
    });
});


/* -------------------------------
   64.0 CONTROLLER - Coming Soon
------------------------------- */
colorAdminApp.controller('comingSoonController', function($scope, $rootScope, $state) {
    $rootScope.setting.layout.pageWithoutHeader = true;
    $rootScope.setting.layout.pageBgWhite = true;
    $rootScope.setting.layout.paceTop = true;
    
    angular.element(document).ready(function () {
        ComingSoon.init();
    });
});


/* -------------------------------
   65.0 CONTROLLER - Profile Page
------------------------------- */
colorAdminApp.controller('profileController', function($scope, $rootScope, $state) {
    $rootScope.setting.layout.pageContentFullWidth = true;
    
    angular.element(document).ready(function () {
        Profile.init();
    });
});


/* -------------------------------
   66.0 CONTROLLER - 404 Error
------------------------------- */
colorAdminApp.controller('errorController', function($scope, $rootScope, $state) {
    $rootScope.setting.layout.pageWithoutHeader = true;
    $rootScope.setting.layout.paceTop = true;
});


/* -------------------------------
   67.0 CONTROLLER - Login V1
------------------------------- */
colorAdminApp.controller('loginV1Controller', function($scope, $rootScope, $state) {
    $rootScope.setting.layout.pageWithoutHeader = true;
    $rootScope.setting.layout.paceTop = true;
    
    $scope.submitForm = function(form) {
        $state.go('app.dashboard.v2');
    };
});


/* -------------------------------
   68.0 CONTROLLER - Login V2
------------------------------- */
colorAdminApp.controller('loginV2Controller', function($scope, $rootScope, $state) {
    $rootScope.setting.layout.pageWithoutHeader = true;
    $rootScope.setting.layout.paceTop = true;
    
    $scope.submitForm = function(form) {
        $state.go('app.dashboard.v2');
    };
    
    angular.element(document).ready(function () {
    	LoginV2.init();
    });
});


/* -------------------------------
   69.0 CONTROLLER - Login V3
------------------------------- */
colorAdminApp.controller('loginV3Controller', function($scope, $rootScope, $state) {
    $rootScope.setting.layout.pageWithoutHeader = true;
    $rootScope.setting.layout.paceTop = true;
    $rootScope.setting.layout.pageBgWhite = true;
    
    $scope.submitForm = function(form) {
        $state.go('app.dashboard.v2');
    };
});


/* -------------------------------
   70.0 CONTROLLER - Register V3
------------------------------- */
colorAdminApp.controller('registerV3Controller', function($scope, $rootScope, $state) {
    $rootScope.setting.layout.pageWithoutHeader = true;
    $rootScope.setting.layout.paceTop = true;
    $rootScope.setting.layout.pageBgWhite = true;
    
    $scope.submitForm = function(form) {
        $state.go('app.dashboard.v2');
    };
});