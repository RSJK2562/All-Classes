import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { User } from '../interfaces/User';

@Injectable({
  providedIn: 'root',
})
export class Products {
  constructor(private http: HttpClient) {}

  // GET API -------------------------------
  getProductList() {
    const url = 'https://dummyjson.com/products';
    return this.http.get(url);
  }

  // ----- User API -----
  userUrl = 'http://localhost:3000/user';

  // getUsers() {
  //   return this.http.get(this.userUrl);
  // }

  // Define Data Type
  getUsers(): Observable<User[]> {
    return this.http.get<User[]>(this.userUrl);
  }

  // POST API -------------------------------
  saveUsers(user: User): Observable<User> {
    // return this.http.post<User>(this.userUrl, { user });
    return this.http.post<User>(this.userUrl, user);
  }

  // Delete API -------------------------------
  deleteUser(id: number): Observable<User> {
    return this.http.delete<User>(this.userUrl + '/' + id);
  }

  // - Set/Populate data in Input fields - //
  getSelectedUser(id: number): Observable<User> {
    return this.http.get<User>(this.userUrl + '/' + id);
  }

  // PUT API -------------------------------
  updateUser(user: User): Observable<User> {
    return this.http.put<User>(this.userUrl + '/' + user.id, user);
  }
}
