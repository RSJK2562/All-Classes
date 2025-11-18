import { Routes } from '@angular/router';
import { Home } from './home/home';
import { About } from './about/about';
import { Contact } from './contact/contact';
import { PageNotFound } from './page-not-found/page-not-found';
import { User } from './user/user';
import { Forms } from './forms/forms';
import { Forms1 } from './forms1/forms1';
import { ParentToChild } from './parent-to-child/parent-to-child';
import { ChildToParent } from './child-to-parent/child-to-parent';
import { Pipes } from './pipes/pipes';
import { Service } from './service/service';

export const routes: Routes = [
  { path: '', component: Home },
  { path: 'about', component: About },
  { path: 'contact', component: Contact },
  
  // ------------ dynamic routeing  ------------
  //   { path: 'user/:id', component: User },
  { path: 'user/:id/:name', component: User },
  
  // ------------ Reactive-Forms ------------
  { path: 'forms', component: Forms },
  
  // ------------ Template Driven-Forms ------------
  { path: 'forms1', component: Forms1 },

  // ------------ Data Parent-Child ------------
  { path: 'parentToChild', component: ParentToChild },
  
  // ------------ Data Child-Parent ------------
  { path: 'childToParent', component: ChildToParent },
  
  // ------------ Pipes ------------
  { path: 'pipes', component: Pipes },
  
  // ------------ Services ------------
  { path: 'services', component: Service },


  // Wild card rout
  { path: '**', component: PageNotFound },
];
