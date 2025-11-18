import { Component } from '@angular/core';
import { FormsModule, NgForm } from '@angular/forms';

@Component({
  selector: 'app-forms1',
  imports: [FormsModule],
  templateUrl: './forms1.html',
  styleUrl: './forms1.css',
})
export class Forms1 {
  userDetails: any = {};

  addDetails(form: NgForm) {
    console.log(form.value);
    this.userDetails = form.value;
  }

  // Validation:-
  addDetailsValidate(form: NgForm) {
    console.log(form);
  }
}
