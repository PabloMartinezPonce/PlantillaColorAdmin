import { Component, ViewEncapsulation } from '@angular/core';
import { AppComponent }  from '../../../app.component';
import * as global from '../../../globals';

@Component({
    selector: 'email-inbox',
    templateUrl: './email-inbox.html'
})

export class EmailInboxPage {
	global = global;

  constructor(private app: AppComponent) {
      app.setPageSettings({
        pageContentFullHeight: true,
        pageContentFullWidth: true
      });
  }
}
