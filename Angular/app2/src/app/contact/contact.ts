import { Component } from '@angular/core';
import { ChildToParent } from '../child-to-parent/child-to-parent';

@Component({
  selector: 'app-contact',
  // imports: [],
  imports: [ChildToParent],
  templateUrl: './contact.html',
  styleUrl: './contact.css',
})
export class Contact {
  // handleUsers(users:string){
  //   console.log(users);
  // }

  users: undefined | string[];
  handleUsers(users: string[]) {
    console.log(users);
    this.users = users;
  }
}
