import { Component, signal } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { User } from '../interfaces/User';
import { Products } from '../services/products';

@Component({
  selector: 'app-form',
  imports: [FormsModule],
  templateUrl: './form.html',
  styleUrl: './form.css',
})
export class Form {
  constructor(private userList: Products) {}
  users = signal<User[]>([]);

  ngOnInit() {
    this.getAllUser();
  }

  getAllUser() {
    this.userList.getUsers().subscribe((data: User[]) => {
      this.users.set(data);
    });
  }

  // - POST API - //

  // addUser(user: User) {
  //   this.userList.saveUsers(user).subscribe((data: User) => {
  //     // console.log(data);

  //     if (data) {
  //       this.getAllUser();
  //     }
  //   });
  // }

  // addUser(userForm: any) {
  //   const user: User = userForm.value;
  //   this.userList.saveUsers(user).subscribe((data: User) => {
  //     if (data) {
  //       this.getAllUser();
  //       userForm.reset();
  //     }
  //   });
  // }

  // - Delete API - //

  // deleteUser(id: number) {
  deleteUser(id: any) {
    // console.log(id);
    this.userList.deleteUser(id).subscribe((data: User) => {
      console.log(data);
      this.getAllUser();
    });
  }

  // - Set/Populate data in Input fields - //
  selectedUser: User | undefined;
  selectUser(id: number) {
    this.userList.getSelectedUser(id).subscribe((data: User) => {
      // console.log(data);
      this.selectedUser = data;
    });
  }

  addUser(userForm: any) {
    const user: User = userForm.value;
    if (!this.selectedUser) {
      this.userList.saveUsers(user).subscribe((data: User) => {
        if (data) {
          this.getAllUser();
          userForm.reset();
        }
      });
    } else {
      // - Update API - //
      // console.log('Update user: ', user);

      const userData = { ...user, id: this.selectedUser.id };
      this.userList.updateUser(userData).subscribe((data) => {
        if (data) {
          this.getAllUser();
        } else {
        }
      });
    }
  }
}
