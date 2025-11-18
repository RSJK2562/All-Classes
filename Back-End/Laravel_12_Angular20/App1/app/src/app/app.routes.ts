import { Routes } from '@angular/router';
import { Index } from './post/index';
import { Create } from './post/create/create';
import { Edit } from './post/edit/edit';
import { View } from './post/view/view';

export const routes: Routes = [
  {
    path: 'post',
    component: Index,
    title: 'All Post',
  },
  {
    path: 'post/create',
    component: Create,
    title: 'Create new Post',
  },
  {
    path: 'post/:postId',
    component: Edit,
    title: 'Edit Post',
  },
  {
    path: 'view/:postId',
    component: View,
    title: 'View Post',
  },
];
