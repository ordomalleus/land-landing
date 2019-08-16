import { NgModule } from '@angular/core';
import {
  MatAutocompleteModule,
  MatBadgeModule,
  MatButtonModule, MatButtonToggleModule,
  MatCardModule,
  MatCheckboxModule,
  MatChipsModule, MatDatepickerModule, MatDialogModule,
  MatDividerModule,
  MatExpansionModule, MatFormFieldModule, MatGridListModule,
  MatIconModule,
  MatInputModule,
  MatListModule,
  MatMenuModule, MatNativeDateModule,
  MatPaginatorModule, MatProgressBarModule,
  MatProgressSpinnerModule, MatRadioModule,
  MatSelectModule,
  MatSidenavModule, MatSliderModule,
  MatSlideToggleModule,
  MatSnackBarModule,
  MatSortModule,
  MatStepperModule,
  MatTableModule,
  MatTabsModule,
  MatToolbarModule,
  MatTooltipModule, MatTreeModule
} from '@angular/material';
import { DragDropModule } from '@angular/cdk/drag-drop';

const modules = [
  MatTableModule,
  MatButtonModule,
  MatToolbarModule,
  MatSelectModule,
  MatTabsModule,
  MatInputModule,
  MatProgressSpinnerModule,
  MatChipsModule,
  MatCardModule,
  MatSidenavModule,
  MatCheckboxModule,
  MatListModule,
  MatMenuModule,
  MatIconModule,
  MatTooltipModule,
  MatSnackBarModule,
  MatSlideToggleModule,
  MatPaginatorModule,
  MatSortModule,
  MatExpansionModule,
  MatStepperModule,
  MatDividerModule,
  MatFormFieldModule,
  MatGridListModule,
  MatRadioModule,
  MatDialogModule,
  MatButtonToggleModule,
  MatDatepickerModule,
  MatTreeModule,
  MatProgressBarModule,
  MatBadgeModule,
  DragDropModule,
  MatAutocompleteModule,
  MatNativeDateModule,
  MatSliderModule
];

@NgModule({
  imports: [...modules],
  exports: [...modules],
})
export class MaterialModule {
}
