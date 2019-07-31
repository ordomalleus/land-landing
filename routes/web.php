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

Route::get('/', function () {
    return view('general');
});

//=====================FORM===========================
Route::post('/form', 'FormController@formSubmit');

//===================INDUSTRY=========================
Route::get('more-industry-1135', function () {
    return view('/industry/more-industry-1135');
});

Route::get('more-industry-1786', function () {
    return view('/industry/more-industry-1786');
});

Route::get('more-industry-2144', function () {
    return view('/industry/more-industry-2144');
});

Route::get('more-industry-2150', function () {
    return view('/industry/more-industry-2150');
});

Route::get('more-industry-2339', function () {
    return view('/industry/more-industry-2339');
});

Route::get('more-industry-6', function () {
    return view('/industry/more-industry-6');
});
//==================GARDENING=========================
Route::get('more-gardening-11639', function () {
    return view('/gardening/more-gardening-11639');
});

Route::get('more-gardening-44361', function () {
    return view('/gardening/more-gardening-44361');
});

Route::get('more-gardening-mohovo', function () {
    return view('/gardening/more-gardening-mohovo');
});
//===================agricultural=======================
Route::get('more-agricultural-visim', function () {
    return view('/agricultural/more-agricultural-visim');
});

Route::get('more-agricultural-lipovo', function () {
    return view('/agricultural/more-agricultural-lipovo');
});
//======================================================
