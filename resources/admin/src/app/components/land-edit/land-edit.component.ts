import { Component, OnInit } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { MatDialog, MatSnackBar } from '@angular/material';
import { map } from 'rxjs/operators';

import { environment } from '../../../environments/environment';
// Components
import { ConfirmComponent } from '../confirm/confirm.component';
import { DialogLandEditComponent } from '../dialog-land-edit/dialog-land-edit.component';

@Component({
  selector: 'app-land-edit',
  templateUrl: './land-edit.component.pug',
  styleUrls: ['./land-edit.component.scss']
})
export class LandEditComponent implements OnInit {
  href = environment.production ? `${window.location.origin}/land-images/` : 'http://localhost:8000/land-images/';
  // Все земли
  lands: any[] = [];
  // Токен
  crsf = '';

  constructor(private httpClient: HttpClient,
              private matSnackBar: MatSnackBar,
              private matDialog: MatDialog) {
  }

  ngOnInit(): void {
    // Получим токен текущей сессии
    this.httpClient.get('/admin/csrf').subscribe((data: string) => {
      this.crsf = data;
    });

    this.getLands();
  }

  // Получим все земли
  getLands() {
    // Получим все земли
    this.httpClient.get('/admin/land/get-all').subscribe((data: any[]) => {
      this.lands = data;
    });
  }

  // Удалить землю
  deleteLand(id) {
    this.matDialog
      .open(ConfirmComponent, { data: { quest: 'Вы уверены, что хотите удалить?' } })
      .afterClosed()
      .pipe(
        map(confirmed => {
          if (confirmed) {
            // Добавим загаловок
            let headers: HttpHeaders = new HttpHeaders();
            headers = headers.append('XSRF-TOKEN', this.crsf);

            // Делаем запрос
            this.httpClient.delete(`/admin/land/delete/${id}`, { headers: headers }).subscribe(data => {
              this.matSnackBar.open('Земля удалена', '', { duration: 5000 });
              // Получим землю
              this.getLands();
            }, () => {
              this.matSnackBar.open('Ошибка', '', { duration: 5000 });
            });
          }
        })
      ).subscribe();
  }

  // Модалка с редактированием
  editLand(id) {
    this.matDialog
      .open(DialogLandEditComponent, { data: { id } })
      .afterClosed()
      .pipe(
        map((data) => {
          if (data && data.confirmed) {
            // Добавим загаловок
            let headers: HttpHeaders = new HttpHeaders();
            headers = headers.append('XSRF-TOKEN', this.crsf);

            // Делаем запрос
            this.httpClient.post(`/admin/land/edit/${id}`, data.formData,{ headers: headers }).subscribe(data => {
              this.matSnackBar.open('Земля изменена', '', { duration: 5000 });
              // Получим землю
              this.getLands();
            }, () => {
              this.matSnackBar.open('Ошибка', '', { duration: 5000 });
            });


          }
        })
      ).subscribe()
  }
}
