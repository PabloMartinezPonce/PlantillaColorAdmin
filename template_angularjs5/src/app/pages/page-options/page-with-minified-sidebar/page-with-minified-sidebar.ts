import { Component } from '@angular/core';
import { AppComponent } from '../../../app.component';

@Component({
    selector: 'page-with-minified-sidebar',
    templateUrl: './page-with-minified-sidebar.html'
})

export class PageSidebarMinified {

    constructor(private app: AppComponent) {
        app.setPageSettings({
          pageSidebarMinified: true
        });
    }
}
