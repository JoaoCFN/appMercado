import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { tab5Page } from './tab5.page';

const routes: Routes = [
  {
    path: '',
    component: tab5Page,
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class tab5PageRoutingModule {}
