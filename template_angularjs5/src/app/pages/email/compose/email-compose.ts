import { Component, ViewEncapsulation, OnInit } from '@angular/core';
import { AppComponent }  from '../../../app.component';
import * as global from '../../../globals';

@Component({
    selector: 'email-compose',
    templateUrl: './email-compose.html'
})

export class EmailComposePage implements OnInit {
	global = global;
  tags;

  ngOnInit() {
    this.tags = [{ 'displayValue': 'bootstrap@gmail.com'},{ 'displayValue' : 'google@gmail.com'}];
  }

  onTagsChanged(value) {
  }

  constructor(private app: AppComponent) {
      app.setPageSettings({
        pageContentFullHeight: true,
        pageContentFullWidth: true
      });
  }
}
