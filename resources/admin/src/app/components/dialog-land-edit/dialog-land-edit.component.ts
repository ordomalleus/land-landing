import { Component, Inject, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { MAT_DIALOG_DATA, MatDialogRef } from '@angular/material';

import { environment } from '../../../environments/environment';

@Component({
  selector: 'app-dialog-land-edit',
  templateUrl: './dialog-land-edit.component.pug',
  styleUrls: ['./dialog-land-edit.component.scss']
})
export class DialogLandEditComponent implements OnInit {
  href = environment.production ? `${window.location.origin}/land-images/` : 'http://localhost:8000/land-images/';
  // Какой wow эффект повешать
  wowEffect = [{ id: 'bounceInLeft', title: 'Слева' }, { id: 'bounceInRight', title: 'Справа' }];
  landType = [
    { id: 1, title: 'Земли сельскохозяйственного назначения' },
    { id: 2, title: 'Земли для садоводства' },
    { id: 3, title: 'Земли сельскохозяйственного назначения' }
  ];

  // Форма
  form = new FormGroup({
    name: new FormControl('', [Validators.required]),
    // name: new FormControl(null, []),
    wow: new FormControl('', []),
    land_type_id: new FormControl('', [Validators.required]),
    // land_type_id: new FormControl(null, []),
    category: new FormControl('', []),
    building: new FormControl('', []),
    price: new FormControl('', []),
    building_icons: new FormControl('', []),
    info: new FormControl('', []),
    table: new FormControl('', []),
    img_name: new FormControl('', []),
    img_sliders: new FormControl([], []),
  });

  crsf = '';
  // Земля
  land: any;

  constructor(@Inject(MAT_DIALOG_DATA) public data: any,
              private matDialogRef: MatDialogRef<DialogLandEditComponent>,
              private httpClient: HttpClient) {
  }

  ngOnInit(): void {
    // Получим токен текущей сессии
    this.httpClient.get('/admin/csrf').subscribe((data: string) => {
      this.crsf = data;
    });

    this.getOneLand();

    // Прочекаем контролы
    this.form.markAllAsTouched();
  }

  /**
   * Получим землю
   */
  getOneLand() {
    // Получим текущую землю по id
    this.httpClient.get(`/admin/land/get-one/${this.data.id}`).subscribe((data: string) => {
      this.land = data;
    });
  }

  /**
   * Удаляем картинку у земли
   * @param id
   */
  deleteImage(id) {

    // Добавим загаловок
    let headers: HttpHeaders = new HttpHeaders();
    headers = headers.append('XSRF-TOKEN', this.crsf);

    // Делаем запрос
    this.httpClient.delete(`/admin/land/delete-image/${id}`, { headers: headers }).subscribe(data => {
      // Получим землю
      this.getOneLand();
    });
  }

  confirm() {
    const result = this.form.getRawValue();

    const newResult = {
      ...result,
      img_sliders: result.img_sliders ? result.img_sliders.files : [],
      img_name: result.img_name ? result.img_name.files ? result.img_name.files[0] : '' : ''
    };

    const formData = new FormData();
    Object.keys(newResult).forEach(key => {
      // Если поле c картинками то разабьем их иначе, создадим массив и добавив в него только тело файлов
      if (key === 'img_sliders') {
        const arr: any[] = newResult[key];
        if (arr) {
          arr.forEach(item => {
            formData.append(`${key}[]`, item);
          });
        } else {
          formData.append(key, '');
        }
      } else {
        formData.append(key, newResult[key] ? newResult[key] : '');
      }
    });

    this.matDialogRef.close({ confirmed: true, formData: formData });
  }
}
