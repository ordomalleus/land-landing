import { BrowserModule } from '@angular/platform-browser';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { LOCALE_ID, NgModule } from '@angular/core';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { MaterialFileInputModule } from 'ngx-material-file-input';
import { HttpClientModule } from '@angular/common/http';
import { CommonModule } from '@angular/common';
import { ColorPickerModule } from 'ngx-color-picker';
// Modules
import { MaterialModule } from '../modules/material.module';
import { AppRoutingModule } from './app-routing.module';
// Components
import { AppComponent } from './app.component';
import { LandAddComponent } from './components/land-add/land-add.component';
import { LandEditComponent } from './components/land-edit/land-edit.component';
import { ConnectFormDirective } from './directives/connectForm';
import { ConfirmComponent } from './components/confirm/confirm.component';
import { DialogLandEditComponent } from './components/dialog-land-edit/dialog-land-edit.component';
import { SettingsEditComponent } from './components/settings-edit/settings-edit.component';

@NgModule({
  declarations: [
    AppComponent,
    LandAddComponent,
    ConnectFormDirective,
    LandEditComponent,
    ConfirmComponent,
    DialogLandEditComponent,
    SettingsEditComponent
  ],
  entryComponents: [
    ConfirmComponent,
    DialogLandEditComponent
  ],
  imports: [
    CommonModule,
    BrowserModule,
    BrowserAnimationsModule,
    HttpClientModule,
    MaterialModule,
    FormsModule,
    ReactiveFormsModule,
    MaterialFileInputModule,
    AppRoutingModule,
    ColorPickerModule
  ],
  providers: [
    { provide: LOCALE_ID, useValue: 'ru' },
  ],
  bootstrap: [AppComponent]
})
export class AppModule {
}
