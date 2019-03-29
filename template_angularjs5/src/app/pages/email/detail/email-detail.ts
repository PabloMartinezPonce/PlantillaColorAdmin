import { Component, ViewEncapsulation } from '@angular/core';
import { AppComponent }  from '../../../app.component';
import * as global from '../../../globals';

@Component({
    selector: 'email-detail',
    templateUrl: './email-detail.html'
})

export class EmailDetailPage {
	global = global;

  constructor(private app: AppComponent) {
      app.setPageSettings({
        pageContentFullHeight: true,
        pageContentFullWidth: true
      });
  }
}
