import { Component } from '@angular/core';
import { AppComponent } from '../../../app.component';
import * as global from '../../../globals';

@Component({
    selector: 'page-full-height',
    templateUrl: './page-full-height.html'
})

export class PageFullHeight {
	global = global;

  constructor(private app: AppComponent) {
      app.setPageSettings({
        pageContentFullHeight: true,
        pageContentFullWidth: true
      });
  }
}
