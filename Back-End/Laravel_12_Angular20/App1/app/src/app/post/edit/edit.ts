import { Location } from '@angular/common';
import { Component } from '@angular/core';
import { PostService } from '../post-service';
import { ActivatedRoute } from '@angular/router';
import { FormsModule } from '@angular/forms';
import { Post } from '../post';

@Component({
  selector: 'app-edit',
  imports: [FormsModule],
  templateUrl: './edit.html',
  styleUrl: './edit.css',
})
export class Edit {
  id = '';
  title = '';
  body = '';
  error = '';

  constructor(
    private location: Location,
    private postService: PostService,
    private route: ActivatedRoute
  ) {}

  goBack() {
    this.location.back();
  }

  ngOnInit(): void {
    this.id = this.route.snapshot.params['postId'];
    // console.log(this.id);
    this.postService.findPosts(this.id).subscribe((post: Post) => {
      // console.log(post);
      this.title = post.title;
      this.body = post.body;
    });
  }

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

    this.postService.updatePosts(this.id, input).subscribe({
      next: (res) => {
        console.log('Post Created:', res);
        alert('Post Update Successfully!');

        this.location.back();
      },
      error: (err) => {
        console.error('Error:', err);
        alert('Something went wrong!');
      },
    });
  }
}
