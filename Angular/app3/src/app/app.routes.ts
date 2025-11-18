import { Routes } from '@angular/router';
import { Api } from './api/api';
import { Home } from './home/home';
import { Form } from './form/form';

export const routes: Routes = [
  { path: '', component: Home },
  { path: 'api', component: Api },
  { path: 'form', component: Form },

  // Route Lazy Loading
  { path: 'admin', loadChildren: () => import('./admin/admin').then((c) => c.Admin) }, //not work
];
