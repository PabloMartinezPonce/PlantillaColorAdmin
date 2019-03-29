import { Component } from '@angular/core';
import { AppComponent } from '../../../app.component';

@Component({
    selector: 'page-with-top-menu',
    templateUrl: './page-with-top-menu.html'
})

export class PageTopMenu {
    constructor(private app: AppComponent) {
      app.setPageSettings({
        pageWithoutSidebar: true,
        pageTopMenu: true
      });
    }
}
