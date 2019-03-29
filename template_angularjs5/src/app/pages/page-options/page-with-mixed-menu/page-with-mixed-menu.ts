import { Component } from '@angular/core';
import { AppComponent } from '../../../app.component';

@Component({
    selector: 'page-with-mixed-menu',
    templateUrl: './page-with-mixed-menu.html'
})

export class PageMixedMenu {
    constructor(private app: AppComponent) {
        app.setPageSettings({
          pageTopMenu: true
        });
    }
}
