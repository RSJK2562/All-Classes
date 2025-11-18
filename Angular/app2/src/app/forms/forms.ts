import { Component } from '@angular/core';
import { FormControl, FormGroup, ReactiveFormsModule, Validators } from '@angular/forms';

@Component({
  selector: 'app-forms',
  imports: [ReactiveFormsModule],
  templateUrl: './forms.html',
  styleUrl: './forms.css',
})
export class Forms {
  // name = new FormControl();
  // password = new FormControl();

  // default value:-
  name = new FormControl('ravi');
  password = new FormControl();

  displayValue() {
    console.log(this.name.value, this.password.value);
  }

  setValues() {
    this.name.setValue('anil');
    this.password.setValue('321123');
  }

  // Form Grouping:-
  profileForm = new FormGroup({
    name1: new FormControl(),
    email1: new FormControl(),
    password1: new FormControl(),
  });

  onSubmit() {
    // console.log('onsubmit call');
    console.log(this.profileForm.value);
  }

  setValues1() {
    this.profileForm.setValue({
      name1: 'ravi',
      email1: 'ravi@gmail.com',
      password1: '1234',
    });
  }

  // Reactive Form Validation:-
  profileFormValidate = new FormGroup({
    name2: new FormControl('', [Validators.required]),
    email2: new FormControl('', [Validators.required, Validators.maxLength(50), Validators.pattern('^[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,4}$')]),
    password2: new FormControl('', [Validators.required, Validators.minLength(8)]),
  });

  onSubmitValidate() {
    console.log(this.profileFormValidate.value);
  }
  
  get nameValue() {
    return this.profileFormValidate.get('name2');
  }
  get emailValue() {
    return this.profileFormValidate.get('email2');
  }
  get passwordValue() {
    return this.profileFormValidate.get('password2');
  }
}
