import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { NgForm } from '@angular/forms';
import { AppComponent }  from '../../../app.component';

@Component({
    selector: 'login-v3',
    templateUrl: './login-v3.html'
})

export class LoginV3Page {
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
