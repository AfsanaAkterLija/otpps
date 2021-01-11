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




//frontend
Route::get('/home','frontend\TemplateController@index')->name('home');

// user registration and form

Route::get('/userform','backend\UserController@form')->name('dashboard.form');
Route::post('/userform/submit','backend\UserController@submit')->name('form.submit');
Route::get('/user/list','backend\UserController@list')->name('user.list');
Route::get('/user/delete/{id}','backend\UserController@user_delete')->name('user.delete');
Route::get('/user/view/{id}','backend\UserController@user_view')->name('user.view');


Route::get('/template','backend\TemplateController@index')->name('dashboard')->middleware('auth');


// Admin login
Route::get('/login','backend\UserController@login')->name('login');
Route::post('/login','backend\UserController@loginProcess')->name('login.do');

// Admin logout

Route::get('/logout','backend\UserController@logout')->name('logout');

// Route::group(['middleware'=>'auth'],function (){
//     Route::get('/admin', function () {
//         return view('layouts.home');
//     })->name('home');

// User login and registration

Route::post('/user/login','frontend\UserController@login')->name('user.login');

Route::post('/user/registration','frontend\UserController@registration')->name('user.registration');

// user logout

Route::get('/user/logout','frontend\UserController@logout')->name('user.logout');

// transport 

Route::get('/transport/form','backend\TransportController@transport')->name('transport.form');
Route::post('/transport/submit','backend\TransportController@transport_submit')->name('transport.submit');
Route::get('/transport/list','backend\TransportController@transport_list')->name('transport.list');


Route::get('planes/approved/{id}','backend\PlanController@approved')->name('plan.approved');

// transport category

Route::get('/transport/category','backend\TransportController@transport_category')->name('category.form');
Route::get('/transport/category/submit','backend\TransportController@transport_category_submit')->name('category.submit');


// location

Route::get('/location/form','backend\LocationController@location')->name('location.form');
Route::post('/location/submit','backend\LocationController@location_submit')->name('location.submit');
Route::get('/location/list','backend\LocationController@location_list')->name('location.list');

// Insert Plan or package

Route::get('/plan','frontend\PlanController@plan')->name('plan.insertplan');
Route::post('/plan/submit','frontend\PlanController@plansubmit')->name('plan.submit');
Route::get('/plan/list','backend\PlanController@posted_plan_list')->name('plan.post.list');
Route::get('/planes/approved/{id}','backend\PlanController@approved')->name('plan.approved');
Route::get('/approve/plan/list','backend\PlanController@approve_plan_list')->name('approve.plan.list');

// Package access

Route::get('/plan/detail/{id}','frontend\PlanController@plan_detail')->name('plan.detail');
Route::get('/plan/payment/{id}','frontend\PlanController@payment')->name('plan.payment');
Route::post('/plan/payment/submit/{id}','frontend\PlanController@payment_submit')->name('plan.payment.submit');
// Route::get('plan/tourist/list','backend\PlanController@plan_tourist_list')->name('plan.tourist.list');

// joined tourists list per package for backend

Route::get('/tourist/list/perplan','backend\PlanController@tourist_list_per_plan')->name('tourist.list.per.plan');

// My Profile

Route::get('/user/profile','frontend\UserController@user_profile')->name('user.profile');
// joined tourists list per package for frontend(my profile)
Route::get('/tourist/list/perplan','frontend\PlanController@tourist_list_per_plan')->name('tourist.list.per.plan');
Route::get('/tourist/list/perplan/approve/{id}','frontend\PlanController@tourist_approve')->name('tourist.list.approve');
