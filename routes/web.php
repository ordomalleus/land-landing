<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//======================ADMIN===========================

// TODO: для прод режима
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function (){
// TODO: для дев режима
//Route::group(['prefix' => 'admin'], function (){
    // Стартовая страница с ангуляром
    Route::get('/', 'Admin\AdminController@index');

    // Получить csrf
    Route::get('/csrf', function() {
        return response()->json(Session::token());
    });

    // Получить глобальные настройки
    Route::get('/settings/get-all', 'Admin\AdminController@settingsGetAll');

    // Изменить глобальные настройки
    Route::post('/settings/edit', 'Admin\AdminController@settingsEdit');

    // Получить все типы земли
    Route::get('/land-type/get-all', 'Admin\AdminController@landTypeGetAll');

    // Получить все земли
    Route::get('/land/get-all', 'Admin\AdminController@landGetAll');

    // Получить одну землю для редактирования
    Route::get('/land/get-one/{id}', 'Admin\AdminController@landGetOne');

    // Добавить новую землю
    Route::post('/land/add', 'Admin\AdminController@addLand');

    // Удалим землю
    Route::delete('/land/delete/{id}', 'Admin\AdminController@deleteLand');

    // Удалим картинку у земли
    Route::delete('/land/delete-image/{id}', 'Admin\AdminController@deleteLandImage');

    // Обновление земли
    Route::post('/land/edit/{id}', 'Admin\AdminController@editLand');
});


Route::get('/home', 'HomeController@index')->name('home');
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

//====================Основной сайт====================
// Главная страница
Route::get('/', 'GeneralController@index');
// Конкретная земля
Route::get('/{id}', 'GeneralController@oneLand');

//=====================FORM===========================
Route::post('/form', 'FormController@formSubmit');

//====================================================
