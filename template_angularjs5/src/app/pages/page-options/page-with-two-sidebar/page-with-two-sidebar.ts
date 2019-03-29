import { Component } from '@angular/core';
import { AppComponent } from '../../../app.component';

@Component({
    selector: 'page-with-two-sidebar',
    templateUrl: './page-with-two-sidebar.html',
})

export class PageTwoSidebar {

    constructor(private app: AppComponent) {
        app.setPageSettings({
          pageSidebarTwo: true
        });
    }
}
