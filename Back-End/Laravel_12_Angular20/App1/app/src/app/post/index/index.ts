import { Component } from '@angular/core';
import { Post } from '../post';
import { PostService } from '../post-service';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-index',
  imports: [RouterLink],
  templateUrl: './index.html',
  styleUrl: './index.css',
})
export class Index {
  posts: Post[] = [];

  constructor(private postService: PostService) {}

  ngOnInit(): void {
    this.postService.getPosts().subscribe((data: Post[]) => {
      // console.log(data);
      this.posts = data;
    });
  }

  // deletePost(id: number) {
  //   // alert(id);
  //   if (confirm('Are you sure to remove this post?')) {
  //     this.postService.deletePosts(id).subscribe(() => {
  //       this.ngOnInit();
  //     });
  //   } else {
  //     alert('Post are safe');
  //   }
  // }

  deletePost(id: number) {
    if (!confirm('Are you sure you want to delete this post?')) {
      alert('Post is safe');
      return;
    }

    this.postService.deletePosts(id).subscribe({
      next: () => {
        alert('Post deleted successfully!');
        this.ngOnInit(); // refresh list
      },
      error: (err) => {
        console.error(err);
        alert('Something went wrong while deleting.');
      },
    });
  }
}
