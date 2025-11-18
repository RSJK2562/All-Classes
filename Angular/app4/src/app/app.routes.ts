import { Routes } from '@angular/router';
import { Login } from './Component/login/login';
import { Layout } from './Component/layout/layout';
import { Dashboard } from './Component/dashboard/dashboard';
import { Dashboard1 } from './Component/dashboard1/dashboard1';
import { Dashboard2 } from './Component/dashboard2/dashboard2';

export const routes: Routes = [
  {
    path: '',
    component: Login,
    pathMatch: 'full',
  },
  {
    path: 'login',
    component: Login,
  },

  // -/-/- //
  {
    path: '',
    component: Layout,
    children: [
      {
        path: 'dashboard',
        component: Dashboard,
        title: 'Dashboard',
      },
      {
        path: 'dashboard1',
        component: Dashboard1,
        title: 'Dashboard 1',
      },
      {
        path: 'dashboard2',
        component: Dashboard2,
        title: 'Dashboard 2',
      },
    ],
  },
];
