import { Component } from '@angular/core';
import { AppComponent } from '../../../app.component';

@Component({
    selector: 'page-without-sidebar',
    templateUrl: './page-without-sidebar.html'
})

export class PageWithoutSidebar {

    constructor(private app: AppComponent) {
      app.setPageSettings({
        pageWithoutSidebar: true
      });
    }
}
