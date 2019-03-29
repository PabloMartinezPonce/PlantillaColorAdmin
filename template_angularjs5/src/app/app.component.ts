import { Component, HostListener, Renderer2, OnInit } from '@angular/core';
import { Title }     from '@angular/platform-browser';
import { SlimLoadingBarService } from 'ng2-slim-loading-bar';
import { Router, NavigationEnd, NavigationStart, ActivatedRoute } from '@angular/router';
import * as global from './globals';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})

export class AppComponent implements OnInit {

  pageSettings;

  ngOnInit() {
    // page settings
    this.pageSettings = {
      pageSidebarMinified: false,
      pageContentFullHeight: false,
      pageContentFullWidth: false,
      pageContentInverseMode: false,
      pageWithFooter: false,
      pageWithoutSidebar: false,
      pageSidebarRight: false,
      pageSidebarRightCollapsed: false,
      pageSidebarTwo: false,
      pageSidebarWide: false,
      pageSidebarTransparent: false,
      pageSidebarLight: false,
      pageTopMenu: false,
      pageEmpty: false,
      pageBodyWhite: false,
      pageMobileSidebarToggled: false,
      pageMobileSidebarFirstClicked: false,
      pageMobileSidebarRightToggled: false,
      pageMobileSidebarRightFirstClicked: false
    };
  }

	// window scroll
  pageHasScroll;
  @HostListener('window:scroll', ['$event'])
  onWindowScroll($event) {
    var doc = document.documentElement;
    var top = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
    if (top > 0) {
      this.pageHasScroll = true;
    } else {
      this.pageHasScroll = false;
    }
  }

	// clear settings to default
	clearSettings() {
		this.pageSettings.pageSidebarMinified = false;
		this.pageSettings.pageContentFullHeight = false,
		this.pageSettings.pageContentFullWidth = false;
		this.pageSettings.pageWithFooter = false;
		this.pageSettings.pageWithoutSidebar = false;
		this.pageSettings.pageSidebarRight = false;
		this.pageSettings.pageSidebarRightCollapsed = false;
		this.pageSettings.pageSidebarTwo = false;
		this.pageSettings.pageSidebarWide = false;
		this.pageSettings.pageSidebarTransparent = false;
		this.pageSettings.pageSidebarLight = false;
		this.pageSettings.pageTopMenu = false;
		this.pageSettings.pageEmpty = false;
		this.pageSettings.pageBodyWhite = false;
		this.pageSettings.pageContentInverseMode = false;
		this.pageSettings.pageMobileSidebarToggled = false;
		this.pageSettings.pageMobileSidebarFirstClicked = false;
		this.pageSettings.pageMobileRightSidebarToggled = false;
		this.pageSettings.pageMobileRightSidebarFirstClicked = false;
  	this.renderer.removeClass(document.body, 'bg-white');
	}

	// set page settings
  setPageSettings(settings) {
  	for (let option in settings) {
  		this.pageSettings[option] = settings[option];
  		if (option == 'pageBodyWhite' && settings[option] == true) {
  		  this.renderer.addClass(document.body, 'bg-white');
  		}
		}
  }

  // set page minified
  onToggleSidebarMinified(val: boolean):void {
  	if (this.pageSettings.pageSidebarMinified) {
  		this.pageSettings.pageSidebarMinified = false;
  	} else {
  		this.pageSettings.pageSidebarMinified = true;
  	}
	}

  // set page right collapse
  onToggleSidebarRight(val: boolean):void {
  	if (this.pageSettings.pageSidebarRightCollapsed) {
  		this.pageSettings.pageSidebarRightCollapsed = false;
  	} else {
  		this.pageSettings.pageSidebarRightCollapsed = true;
  	}
	}

  // hide mobile sidebar
  onHideMobileSidebar(val: boolean):void {
    if (this.pageSettings.pageMobileSidebarToggled) {
      if (this.pageSettings.pageMobileSidebarFirstClicked) {
        this.pageSettings.pageMobileSidebarFirstClicked = false;
      } else {
  		  this.pageSettings.pageMobileSidebarToggled = false;
      }
    }
	}

  // toggle mobile sidebar
  onToggleMobileSidebar(val: boolean):void {
    if (this.pageSettings.pageMobileSidebarToggled) {
  		this.pageSettings.pageMobileSidebarToggled = false;
    } else {
  		this.pageSettings.pageMobileSidebarToggled = true;
  		this.pageSettings.pageMobileSidebarFirstClicked = true;
    }
	}


  // hide right mobile sidebar
  onHideMobileRightSidebar(val: boolean):void {
    if (this.pageSettings.pageMobileRightSidebarToggled) {
      if (this.pageSettings.pageMobileRightSidebarFirstClicked) {
        this.pageSettings.pageMobileRightSidebarFirstClicked = false;
      } else {
  		  this.pageSettings.pageMobileRightSidebarToggled = false;
      }
    }
	}

  // toggle right mobile sidebar
  onToggleMobileRightSidebar(val: boolean):void {
    if (this.pageSettings.pageMobileRightSidebarToggled) {
  		this.pageSettings.pageMobileRightSidebarToggled = false;
    } else {
  		this.pageSettings.pageMobileRightSidebarToggled = true;
  		this.pageSettings.pageMobileRightSidebarFirstClicked = true;
    }
	}

  constructor(private titleService: Title, private slimLoadingBarService: SlimLoadingBarService , private router: Router, private renderer: Renderer2) {
    router.events.subscribe((e) => {
			if (e instanceof NavigationStart) {
				this.clearSettings();
				if (e.url != '/') {
					slimLoadingBarService.progress = 50;
					slimLoadingBarService.start();
				}
			}
			if (e instanceof NavigationEnd) {
				if (e.url != '/') {
					setTimeout(function() {
						slimLoadingBarService.complete();
					}, 300);
				}
			}
    });
  }
}
