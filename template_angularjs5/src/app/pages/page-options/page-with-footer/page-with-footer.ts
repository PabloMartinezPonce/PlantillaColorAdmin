import { Component } from '@angular/core';
import { AppComponent } from '../../../app.component';

@Component({
    selector: 'page-with-footer',
    templateUrl: './page-with-footer.html'
})

export class PageFooter {

    constructor(private app: AppComponent) {
        app.setPageSettings({
          pageWithFooter: true
        });
    }
}
