import { ChangeDetectorRef, Directive, Input, OnDestroy, OnInit } from '@angular/core';
import { FormArray, FormGroup, FormGroupDirective } from '@angular/forms';
import { distinctUntilChanged, takeUntil } from 'rxjs/operators';
import { Subject } from 'rxjs';


/**
 * Класс со статичными методами для обработки форм
 */
export class ConnectFormMethods {
    /**
     * Прочекаем контролы
     * @param formGroup
     */
    static markFormGroupTouched = (formGroup: FormGroup | FormArray) => {
        Object.values(formGroup.controls).forEach(control => {
            // Рекурсия на вложеные FormGroup
            if (control instanceof FormGroup) {
                ConnectFormMethods.markFormGroupTouched(control);
            }
            if (control instanceof FormArray) {
                ConnectFormMethods.markFormGroupTouched(control);
            } else {
                control.markAsTouched();
            }
        });
    };

    /**
     * Зануляет все значения в форме на первом уровне
     * @param formGroup
     */
    static nullControl = (formGroup: FormGroup | FormArray) => {
        Object.values(formGroup.controls).forEach(control => {
            // Рекурсия на вложеные FormGroup
            if (control instanceof FormGroup) {
                ConnectFormMethods.nullControl(control);
            }
            if (control instanceof FormArray) {
                ConnectFormMethods.nullControl(control);
            } else {
                control.patchValue(null);
            }
        });
    };

    /**
     * Метод для рекурсивного обновления вложенных форм
     * @param formGroup
     * @param val
     */
    static pathValue(formGroup: FormGroup | FormArray, val: Object) {
        // Проходмся по контролам и получаем массив их имен, после идем по этому массиву
        Object.keys(formGroup.controls).forEach((controlName: string) => {
            // Получаем значение из объекта, если есть
            let valControl = val[controlName];
            // Если приходит массив, то создаем новый (копируем)
            if (Array.isArray(valControl)) {
                valControl = [...valControl];
            }
            // Получаем контрол по имени
            const control = formGroup.get(controlName);

            if (valControl !== undefined) {
                // Рекурсия на вложеные FormGroup
                if (control instanceof FormGroup) {
                    // Если это вложенный объект и он занулен, то занулим все дочерние значения
                    if (valControl === null) {
                        ConnectFormMethods.nullControl(control);
                    } else {
                        //  Если это вложенный объект, то запустим рекурсю по нему
                        ConnectFormMethods.pathValue(control, valControl);
                    }
                }
                // Если это FormArray
                if (control instanceof FormArray) {
                    // control.patchValue(valControl);

                    // Если это вложенный объект и он занулен, то занулим все дочерние значения
                    if (valControl === null) {
                        ConnectFormMethods.nullControl(control);
                    } else {
                        //  Если это вложенный объект, то запустим рекурсю по нему
                        ConnectFormMethods.pathValue(control, valControl);
                    }
                } else {
                    // Если это обычный контрол то установим значение
                    control.patchValue(valControl);
                }
            }
        });
    }
}


/**
 * Директива ставится на форму для использования пайпа async. Обновляет значения formControlName.
 * Передавать объект со значениями равными formGroup
 * Пример: '<form [formGroup]="foo" [appConnectForm]="bar$ | async">...</div>', где bar$ = {foo: 'baz'}
 */
@Directive({
    selector: '[appConnectForm]',
    providers: [FormGroupDirective]
})
export class ConnectFormDirective implements OnInit, OnDestroy {
    @Input('appConnectForm')
    set data(val: any) {
        if (val) {
            ConnectFormMethods.pathValue(this.formGroupDirective.form, val);
        }

        // Если вместо значения пришло null то занулим все контролы
        if (val === null) {
            ConnectFormMethods.nullControl(this.formGroupDirective.form);
        }

        // Прочекаем контролы
        ConnectFormMethods.markFormGroupTouched(this.formGroupDirective.form);

        // TODO: возможно убрать или нет, проверить
        this.changeDetectorRef.markForCheck();
    }

    // Отписки
    private ngUnsubscribe$: Subject<void> = new Subject<void>();

    constructor(private formGroupDirective: FormGroupDirective,
                private changeDetectorRef: ChangeDetectorRef) {
    }

    ngOnInit(): void {
        this.formGroupDirective.form.statusChanges
            .pipe(
                takeUntil(this.ngUnsubscribe$),
                distinctUntilChanged()
            )
            .subscribe((_) => {
                this.changeDetectorRef.markForCheck();
            });
    }

    ngOnDestroy() {
        this.ngUnsubscribe$.next();
        this.ngUnsubscribe$.complete();
    }
}
