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
Route::get('/template','backend\TemplateController@index')->name('dashboard')->middleware('auth');
Route::get('/charts','backend\TemplateController@charts')->name('dashboard.charts');
// Route::get('/form','frontend\FormController@form')->name('dashboard.form');
// Route::post('/form/submit','frontend\FormController@submit')->name('form.submit');
// Route::get('/form/table','frontend\FormController@table')->name('form.table');
// Route::get('/cotourist/delete/{id}','frontend\FormController@cotourist_delete')->name('co-tourist.delete');
// Route::get('/cotourist/view/{id}','frontend\FormController@cotourist_view')->name('co-tourist.view');
// Route::get('/product/edit/{id}','ProductController@cotourist_edit')->name('cotourist.edit');

Route::get('/plan','frontend\FormController@plan')->name('plan.insertplan');
Route::post('/plan/submit','frontend\FormController@plansubmit')->name('plan.submit');
Route::get('/plan/list','frontend\FormController@planlist')->name('plan.list');


//frontend
Route::get('/home','frontend\TemplateController@index');

// user registration and form

Route::get('/userform','frontend\UserController@form')->name('dashboard.form');
Route::post('/userform/submit','frontend\UserController@submit')->name('form.submit');
Route::get('/user/list','frontend\UserController@list')->name('user.list');
Route::get('/user/delete/{id}','frontend\UserController@user_delete')->name('user.delete');
Route::get('/user/view/{id}','frontend\UserController@user_view')->name('user.view');


Route::get('/template','backend\TemplateController@index')->name('dashboard')->middleware('auth');


// Admin login
Route::get('/login','frontend\UserController@login')->name('login');
Route::post('/login','frontend\UserController@loginProcess')->name('login.do');

// Admin logout

Route::get('/logout','frontend\UserController@logout')->name('logout');

// Route::group(['middleware'=>'auth'],function (){
//     Route::get('/admin', function () {
//         return view('layouts.home');
//     })->name('home');