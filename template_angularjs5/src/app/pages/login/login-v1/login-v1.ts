import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { NgForm } from '@angular/forms';
import { AppComponent }  from '../../../app.component';

@Component({
    selector: 'login-v1',
    templateUrl: './login-v1.html'
})

export class LoginV1Page {
  constructor(private app: AppComponent, private router: Router) {
      app.setPageSettings({
        pageEmpty: true
      });
  }

  formSubmit(f: NgForm) {
    this.router.navigate(['dashboard/v2']);
  }
}
