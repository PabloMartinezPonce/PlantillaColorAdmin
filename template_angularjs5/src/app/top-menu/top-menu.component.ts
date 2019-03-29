import { group, animate, query, style, trigger, transition, state } from '@angular/animations';
import { Component, Output, EventEmitter } 		 from '@angular/core';
import * as global 			 from '../globals';

@Component({
  selector: 'top-menu',
  templateUrl: './top-menu.component.html',
  animations: [
    trigger('expandCollapse', [
      state('expand', style({ height: '*', overflow: 'hidden', display: 'block' })),
      state('collapse', style({ height: '0px', overflow: 'hidden', display: 'block' })),
      state('active', style({ height: '*', overflow: 'hidden', display: 'block' })),
      transition('expand <=> collapse', animate(100)),
      transition('active => collapse', animate(100))
    ])
  ]
})

export class TopMenuComponent {
  navProfileState = 'collapse';
	slimScrollOptions = global.whiteSlimScrollOptions;
	@Output() toggleSidebarMinified = new EventEmitter<boolean>();

  toggleNavProfile() {
    if (this.navProfileState == 'collapse') {
      this.navProfileState = 'expand';
    } else {
      this.navProfileState = 'collapse';
    }
  }

	toggleMinified() {
		this.toggleSidebarMinified.emit(true);
	}

	expandCollapseSubmenu(currentMenu, allMenu, active) {
		for (let menu of allMenu) {
			if (menu != currentMenu) {
				menu.state = 'collapse';
			}
		}
		if (currentMenu.state == 'expand' || (active.isActive && !currentMenu.state)) {
			currentMenu.state = 'collapse';
		} else {
			currentMenu.state = 'expand';
		}
	}

  menus = [{
		'icon': 'fa fa-th-large',
		'title': 'Dashboard',
		'url': '',
		'caret': 'true',
		'submenu': [{
			'url': 'dashboard/v1',
			'title': 'Dashboard v1'
		},{
			'url': 'dashboard/v2',
			'title': 'Dashboard v2'
		}]
	},{
		'icon': 'fa fa-hdd',
		'title': 'Email',
		'url': '',
		'badge': '10',
		'submenu': [{
			'url': 'email/inbox',
			'title': 'Inbox'
		},{
			'url': 'email/compose',
			'title': 'Compose'
		},{
			'url': 'email/detail',
			'title': 'Detail'
		}]
	},{
		'icon': 'fa fa-gem',
		'title': 'UI Elements',
		'url': '',
		'label': 'NEW',
		'caret': 'true',
		'submenu': [{
			'url': 'ui/general',
			'title': 'General'
		},{
			'url': 'ui/typography',
			'title': 'Typography'
		},{
			'url': 'ui/tabs-accordions',
			'title': 'Tabs & Accordions'
		},{
			'url': 'ui/modal-notification',
			'title': 'Modal & Notification',
			'highlight': 'true'
		},{
			'url': 'ui/widget-boxes',
			'title': 'Widget Boxes'
		},{
			'url': 'ui/media-object',
			'title': 'Media Object'
		},{
			'url': 'ui/buttons',
			'title': 'Buttons'
		},{
			'url': 'ui/icons',
			'title': 'Icons'
		},{
			'url': 'ui/simple-line-icons',
			'title': 'Simple Line Ioncs'
		},{
			'url': 'ui/ionicons',
			'title': 'Ionicons'
		},{
			'url': 'ui/language-icon',
			'title': 'Language Icon'
		},{
			'url': 'ui/social-buttons',
			'title': 'Social Buttons'
		}]
	},{
		'img': '/assets/img/logo/logo-bs4.png',
		'title': 'Bootstrap 4',
		'url': 'bootstrap-4',
		'label': 'NEW'
	},{
		'icon': 'fa fa-list-ol',
		'title': 'Form Stuff',
		'url': 'form-stuff'
	},{
		'icon': 'fa fa-table',
		'title': 'Tables',
		'url': 'tables'
	},{
		'icon': 'fa fa-star',
		'title': 'Frontend',
		'url': '',
		'caret': 'true',
		'submenu': [{
			'url': '',
			'title': 'One Page Parallax'
		},{
			'url': '',
			'title': 'Blog'
		},{
			'url': '',
			'title': 'Forum'
		},{
			'url': '',
			'title': 'E-Commerce'
		}]
	},{
		'icon': 'fa fa-chart-pie',
		'title': 'Chart',
		'url': '',
		'caret': 'true',
		'submenu': [{
			'url': 'chart/ngx',
			'title': 'Ngx Chart'
		},{
			'url': 'chart/d3',
			'title': 'd3 Chart'
		}]
	},{
		'icon': 'fa fa-calendar',
		'title': 'Calendar',
		'url': 'calendar'
	},{
		'icon': 'fa fa-map',
		'title': 'Map',
		'url': '/map'
	},{
		'icon': 'fa fa-image',
		'title': 'Gallery',
		'url': '',
		'caret': 'true',
		'submenu': [{
			'url': 'gallery/v1',
			'title': 'Gallery v1'
		},{
			'url': 'gallery/v2',
			'title': 'Gallery v2'
		}]
	},{
		'icon': 'fa fa-cogs',
		'title': 'Page Options',
		'url': '',
		'caret': 'true',
		'submenu': [{
			'url': 'page-option/page-blank',
			'title': 'Blank Page'
		},{
			'url': 'page-option/page-with-footer',
			'title': 'Page with Footer'
		},{
			'url': 'page-option/page-without-sidebar',
			'title': 'Page without Sidebar'
		},{
			'url': 'page-option/page-with-right-sidebar',
			'title': 'Page with Right Sidebar'
		},{
			'url': 'page-option/page-with-minified-sidebar',
			'title': 'Page with Minified Sidebar'
		},{
			'url': 'page-option/page-with-two-sidebar',
			'title': 'Page with Two Sidebar'
		},{
			'url': 'page-option/page-full-height',
			'title': 'Full Height Content'
		},{
			'url': 'page-option/page-with-wide-sidebar',
			'title': 'Page with Wide Sidebar'
		},{
			'url': 'page-option/page-with-light-sidebar',
			'title': 'Page with Light Sidebar'
		},{
			'url': 'page-option/page-with-top-menu',
			'title': 'Page with Top Menu'
		},{
			'url': 'page-option/page-with-mixed-menu',
			'title': 'Page with Mixed Menu'
		},{
			'url': 'page-option/page-with-transparent-sidebar',
			'title': 'Page with Transparent Sidebar'
		}]
	},{
		'icon': 'fa fa-gift',
		'title': 'Extra',
		'url': '',
		'caret': 'true',
		'submenu': [{
			'url': 'extra/timeline',
			'title': 'Timeline'
		},{
			'url': 'extra/coming-soon',
			'title': 'Coming Soon Page'
		},{
			'url': 'extra/search-results',
			'title': 'Search Results'
		},{
			'url': 'extra/invoice',
			'title': 'Invoice'
		},{
			'url': 'extra/error-page',
			'title': '404 Error Page'
		},{
			'url': 'extra/profile',
			'title': 'Profile Page'
		}]
	},{
		'icon': 'fa fa-key',
		'title': 'Login & Register',
		'url': '',
		'caret': 'true',
		'submenu': [{
			'url': 'login/v1',
			'title': 'Login'
		},{
			'url': 'login/v2',
			'title': 'Login v2'
		},{
			'url': 'login/v3',
			'title': 'Login v3'
		},{
			'url': 'register/v3',
			'title': 'Register v3'
		}]
	},{
		'icon': 'fa fa-cube',
		'title': 'Version',
		'url': '',
		'label': 'NEW',
		'caret': 'true',
		'submenu': [{
			'url': '',
			'title': 'HTML'
		},{
			'url': '',
			'title': 'AJAX'
		},{
			'url': '',
			'title': 'ANGULAR JS'
		},{
			'url': '',
			'title': 'ANGULAR JS 5'
		},{
			'url': '',
			'title': 'LARAVEL',
			'highlight': 'true'
		},{
			'url': '',
			'title': 'MATERIAL DESIGN'
		},{
			'url': '',
			'title': 'APPLE DESIGN'
		},{
			'url': '',
			'title': 'TRANSPARENT DESIGN'
		}]
	},{
		'icon': 'fa fa-medkit',
		'title': 'Helper',
		'url': '',
		'caret': 'true',
		'submenu': [{
			'url': 'helper/css',
			'title': 'Predefined CSS Classes'
		}]
	},{
		'icon': 'fa fa-align-left',
		'title': 'Menu Level',
		'url': '',
		'caret': 'true',
		'submenu': [{
			'url': '',
			'title': 'Menu 1.1',
			'caret': 'true',
			'submenu': [{
				'url': '',
				'title': 'Menu 2.1',
				'caret': 'true',
				'submenu': [{
					'url': '',
					'title': 'Menu 3.1',
				},{
					'url': '',
					'title': 'Menu 3.2'
				}]
			},{
				'url': '',
				'title': 'Menu 2.2'
			},{
				'url': '',
				'title': 'Menu 2.3'
			}]
		},{
			'url': '',
			'title': 'Menu 1.2'
		},{
			'url': '',
			'title': 'Menu 1.3'
		}]
	}];
}
