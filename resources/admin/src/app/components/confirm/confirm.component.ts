import { Component, Inject } from '@angular/core';
import { MAT_DIALOG_DATA } from '@angular/material';

@Component({
    selector: 'app-confirm-prompt',
    template: `
        <h3 *ngIf="data?.title" mat-dialog-title>{{data?.title}}</h3>
        <mat-dialog-content>
            <h4 [innerHtml]="data.quest">
            </h4>
        </mat-dialog-content>
        <mat-dialog-actions align="end">
            <button color="primary" mat-raised-button [mat-dialog-close]="true">
                Да
            </button>
            <button color="warn" mat-raised-button [mat-dialog-close]="false">
                Нет
            </button>
        </mat-dialog-actions>
    `
})
export class ConfirmComponent {
    constructor(@Inject(MAT_DIALOG_DATA) public data: any) {
    }
}
