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
//backend//
Route::get('/template','backend\TemplateController@index')->name('dashboard');
Route::get('/charts','backend\TemplateController@charts')->name('dashboard.charts');
Route::get('/form','frontend\FormController@form')->name('dashboard.form');
Route::post('/form/submit','frontend\FormController@submit')->name('form.submit');
Route::get('/form/table','frontend\FormController@table')->name('form.table');
Route::get('/cotourist/delete/{id}','frontend\FormController@cotourist_delete')->name('co-tourist.delete');
Route::get('/cotourist/view/{id}','frontend\FormController@cotourist_view')->name('co-tourist.view');

Route::get('/plan','frontend\FormController@plan')->name('plan.insertplan');
Route::post('/plan/submit','frontend\FormController@plansubmit')->name('plan.submit');
Route::get('/plan/list','frontend\FormController@planlist')->name('plan.list');


//frontend
Route::get('/home','frontend\TemplateController@index');
