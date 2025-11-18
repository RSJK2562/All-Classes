import { Location } from '@angular/common';
import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { PostService } from '../post-service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-create',
  imports: [FormsModule],
  templateUrl: './create.html',
  styleUrl: './create.css',
})
export class Create {
  constructor(
    private location: Location,
    private postService: PostService,
    private router: Router
  ) {}

  goBack() {
    this.location.back();
  }

  title = '';
  body = '';
  error = '';

  submit() {
    if (!this.title || !this.body) {
      this.error = 'Title and Body fields are required.';
      return;
    }

    const input = {
      title: this.title,
      body: this.body,
      id: 1,
    };

    this.postService.createPosts(input).subscribe({
      next: (res) => {
        console.log('Post Created:', res);
        alert('Post Created Successfully!');
        this.router.navigate(['post']);
      },
      error: (err) => {
        console.error('Error:', err);
        alert('Something went wrong!');
      },
    });

    // alert(this.title + '|' + this.body);
  }
}
