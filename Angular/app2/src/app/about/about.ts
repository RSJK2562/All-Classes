import { Component } from '@angular/core';
import { ParentToChild } from '../parent-to-child/parent-to-child';

@Component({
  selector: 'app-about',
  // imports: [],
  imports: [ParentToChild],
  templateUrl: './about.html',
  styleUrl: './about.css',
})
export class About {
  userName = 'Karan';
  onUserChange(user: string) {
    this.userName = user;
  }

  users = ['Ravi', 'Anil', 'Karan', 'Anish', 'Vipin', 'Anshu'];
}
