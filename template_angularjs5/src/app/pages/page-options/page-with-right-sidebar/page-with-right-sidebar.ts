import { Component } from '@angular/core';
import { AppComponent } from '../../../app.component';

@Component({
    selector: 'page-with-right-sidebar',
    templateUrl: './page-with-right-sidebar.html'
})

export class PageSidebarRight {

    constructor(private app: AppComponent) {
        app.setPageSettings({
          pageSidebarRight: true
        });
    }
}
