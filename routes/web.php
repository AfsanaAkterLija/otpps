<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/template','backend\TemplateController@index')->name('dashboard');
Route::get('/charts','backend\TemplateController@charts')->name('dashboard.charts');
Route::get('/form','frontend\FormController@form')->name('dashboard.form');
Route::post('/form/submit','frontend\FormController@submit')->name('form.submit');
Route::get('/form/table','frontend\FormController@table')->name('form.table');



Route::get('/home','frontend\TemplateController@index');
