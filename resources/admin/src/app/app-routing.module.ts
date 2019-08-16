import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
// Components
import { LandAddComponent } from './components/land-add/land-add.component';
import { LandEditComponent } from './components/land-edit/land-edit.component';
import { SettingsEditComponent } from './components/settings-edit/settings-edit.component';


const routes: Routes = [
  {
    path: '',
    component: LandAddComponent
  },
  {
    path: 'edit-land',
    component: LandEditComponent
  },
  {
    path: 'edit-settings',
    component: SettingsEditComponent
  },
];

@NgModule({
  imports: [RouterModule.forRoot(routes, { useHash: true })],
  exports: [RouterModule]
})
export class AppRoutingModule { }
