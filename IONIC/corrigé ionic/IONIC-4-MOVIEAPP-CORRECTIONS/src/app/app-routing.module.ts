import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

const routes: Routes = [
  { path: '', loadChildren: './tabs/tabs.module#TabsPageModule' },
  { path: 'detail', loadChildren: './detail/detail.module#DetailPageModule' },
  { path: 'trailer', loadChildren: './trailer/trailer.module#TrailerPageModule' },
  { path: 'add-comment', loadChildren: './add-comment/add-comment.module#AddCommentPageModule' }
];
@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
