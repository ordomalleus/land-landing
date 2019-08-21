import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { MatSnackBar } from '@angular/material';

@Component({
  selector: 'app-settings-edit',
  templateUrl: './settings-edit.component.pug',
  styleUrls: ['./settings-edit.component.scss']
})
export class SettingsEditComponent implements OnInit {
  // Форма
  form = new FormGroup({
    title: new FormControl('', [Validators.required]),
    title_second: new FormControl('', [Validators.required]),
    global_image: new FormControl('', []),
    color_block: new FormControl('', [Validators.required]),
    type_id_0: new FormControl('', [Validators.required]),
    type_id_1: new FormControl('', [Validators.required]),
    type_id_2: new FormControl('', [Validators.required]),
  });

  crsf = '';
  globalSettings: any;
  color;
  landType: any[];

  constructor(private httpClient: HttpClient,
              private snackBar: MatSnackBar) {
  }

  ngOnInit(): void {
    // Получим токен текущей сессии
    this.httpClient.get('/admin/csrf').subscribe((data: string) => {
      this.crsf = data;
    });

    // Получим тип земель
    this.httpClient.get('/admin/land-type/get-all').subscribe((data: any[]) => {
      this.landType = data;
      this.form.get('type_id_0').patchValue(data[0].title);
      this.form.get('type_id_1').patchValue(data[1].title);
      this.form.get('type_id_2').patchValue(data[2].title);
    });

    this.getGlobalSettings();
  }

  /**
   * Получить главные настройки
   */
  getGlobalSettings() {
    this.httpClient.get('/admin/settings/get-all').subscribe((data: any) => {
      this.globalSettings = data;
      this.color = data.color_block;
    });
  }

  serColor(color) {
    this.color = color;
    this.form.get('color_block').patchValue(color);
  }

  confirm() {
    const result = this.form.getRawValue();

    const newResult = {
      ...result,
      global_image: result.global_image ? result.global_image.files ? result.global_image.files[0] : '' : ''
    };

    const formData = new FormData();
    Object.keys(newResult).forEach(key => {
      formData.append(key, newResult[key]);
    });

    // Добавим загаловок
    let headers: HttpHeaders = new HttpHeaders();
    headers = headers.append('XSRF-TOKEN', this.crsf);
    // Делаем запрос
    this.httpClient.post('/admin/settings/edit', formData, { headers: headers }).subscribe(data => {
      this.snackBar.open('Настройки изменены', '', { duration: 5000 });
    }, () => {
      this.snackBar.open('Ошибка', '', { duration: 5000 });
    });
  }
}
