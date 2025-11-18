import { Location } from '@angular/common';
import { Component } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { PostService } from '../post-service';
import { Post } from '../post';

@Component({
  selector: 'app-view',
  imports: [],
  templateUrl: './view.html',
  styleUrl: './view.css',
})
export class View {
  id = '';
  title = '';
  body = '';
  dateTime = '';

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
    this.postService.findPosts(this.id).subscribe((post: Post) => {
      // console.log(post);
      this.title = post.title;
      this.body = post.body;
    });
  }
}
