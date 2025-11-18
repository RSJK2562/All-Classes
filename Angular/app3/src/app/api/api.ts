import { Component, signal } from '@angular/core';
import { Products } from '../services/products';
import { CommonModule } from '@angular/common';
import { User } from '../interfaces/User';

@Component({
  selector: 'app-api',
  imports: [CommonModule],
  templateUrl: './api.html',
  styleUrl: './api.css',
})
export class Api {
  // users: any;

  // users = signal<any[]>([]);
  // constructor(private userList: Products) {}
  // ngOnInit() {
  //   this.userList.getUsers().subscribe((data: any) => {
  //     // this.users = data;
  //     // console.log(this.users);

  //     this.users.set(data);
  //   });
  // }

  // Define-Data-Type
  users = signal<User[]>([]);
  constructor(private userList: Products) {}
  ngOnInit() {
    this.userList.getUsers().subscribe((data: User[]) => {
      this.users.set(data);
    });
  }


















  
}
