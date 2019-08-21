import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { MatSnackBar } from '@angular/material';
import { map, switchMap } from 'rxjs/operators';

@Component({
  selector: 'app-land-add',
  templateUrl: './land-add.component.pug',
  styleUrls: ['./land-add.component.scss']
})
export class LandAddComponent implements OnInit {
  // Какой wow эффект повешать
  wowEffect = [{ id: 'bounceInLeft', title: 'Слева' }, { id: 'bounceInRight', title: 'Справа' }];
  landType: any[];

  // landType = [
  //   { id: 1, title: 'Земли промышленности' },
  //   { id: 2, title: 'Земли для садоводства' },
  //   { id: 3, title: 'Земли сельскохозяйственного назначения' }
  // ];

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
  // Индикатор загрузки
  apiSend = false;

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
    });

    // Прочекаем контролы
    this.form.markAllAsTouched();
  }

  confirm() {
    this.apiSend = true;
    const result = this.form.getRawValue();

    const newResult = {
      ...result,
      img_sliders: result.img_sliders ? result.img_sliders.files : [],
      img_name: result.img_name ? result.img_name.files[0] : ''
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
        formData.append(key, newResult[key]);
      }
    });

    // Добавим загаловок
    let headers: HttpHeaders = new HttpHeaders();
    headers = headers.append('XSRF-TOKEN', this.crsf);
    // Делаем запрос
    this.httpClient.post('/admin/land/add', formData, { headers: headers }).subscribe(data => {
      this.apiSend = false;
      this.snackBar.open('Новая земля добавлена', '', { duration: 5000 });
    }, () => {
      this.snackBar.open('Ошибка', '', { duration: 5000 });
    });
  }
}
