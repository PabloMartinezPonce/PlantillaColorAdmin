import { Component, ViewEncapsulation } from '@angular/core';
import { AppComponent }  from '../../../app.component';
import { Router } from '@angular/router';
import { NgForm } from '@angular/forms';
import { Config } from "ngx-countdown";

@Component({
    selector: 'extra-coming-soon',
    templateUrl: './extra-coming-soon.html',
    styleUrls: [ '../../../../../../assets/plugins/jquery.countdown/jquery.countdown.css' ],
    encapsulation: ViewEncapsulation.None
})

export class ExtraComingSoonPage {
  constructor(private app: AppComponent, private router: Router) {
      app.setPageSettings({
        pageEmpty: true,
        pageBodyWhite: true
      });
  }

  formSubmit(f: NgForm) {
    this.router.navigate(['dashboard/v2']);
  }
}
