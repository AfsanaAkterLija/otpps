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
Route::get('/user/list','backend\UserController@list')->name('user.list')->middleware('auth');
Route::get('/user/delete/{id}','backend\UserController@user_delete')->name('user.delete')->middleware('auth');
Route::get('/user/view/{id}','backend\UserController@user_view')->name('user.view')->middleware('auth');


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

Route::get('/transport/form','backend\TransportController@transport')->name('transport.form')->middleware('auth');
Route::post('/transport/submit','backend\TransportController@transport_submit')->name('transport.submit')->middleware('auth');
Route::get('/transport/list','backend\TransportController@transport_list')->name('transport.list')->middleware('auth');
Route::get('/transport/delete/{id}','backend\TransportController@transport_delete')->name('transport.delete')->middleware('auth');


Route::get('planes/approved/{id}','backend\PlanController@approved')->name('plan.approved')->middleware('auth');

// transport category

Route::get('/transport/category','backend\TransportController@transport_category')->name('category.form')->middleware('auth');
Route::get('/transport/category/submit','backend\TransportController@transport_category_submit')->name('category.submit')->middleware('auth');
Route::get('/transport/delete/{id}','backend\TransportController@transport_delete')->name('transport.delete')->middleware('auth');
Route::get('/transport/edit/{id}','backend\TransportController@edit_transport')->name('transport.edit');
Route::post('/transport/update/{id}','backend\TransportController@update_transport')->name('transport.update');



// location

Route::get('/location/form','backend\LocationController@location')->name('location.form')->middleware('auth');
Route::post('/location/submit','backend\LocationController@location_submit')->name('location.submit')->middleware('auth');
Route::get('/location/list','backend\LocationController@location_list')->name('location.list')->middleware('auth');
Route::get('/location/delete/{id}','backend\LocationController@location_delete')->name('location.delete')->middleware('auth');
Route::get('/location/edit/{id}','backend\LocationController@edit_location')->name('location.edit');
Route::post('/location/update/{id}','backend\LocationController@update_location')->name('location.update');

// Insert Plan or package

Route::get('/plan','frontend\PlanController@plan')->name('plan.insertplan');
Route::post('/plan/submit','frontend\PlanController@plansubmit')->name('plan.submit');
Route::get('/plan/list','backend\PlanController@posted_plan_list')->name('plan.post.list')->middleware('auth');
Route::get('/planes/approved/{id}','backend\PlanController@approved')->name('plan.approved')->middleware('auth');
Route::get('/approve/plan/list','backend\PlanController@approve_plan_list')->name('approve.plan.list')->middleware('auth');
Route::get('/posted/plan/list/view/{id}','backend\PlanController@view_posted_plan')->name('posted.plan.view')->middleware('auth');
Route::get('/posted/plan/list/delete/{id}','backend\PlanController@delete_posted_plan')->name('posted.plan.delete')->middleware('auth');
Route::get('/plan/edit/{id}','frontend\PlanController@edit_plan')->name('plan.edit');
Route::put('/plan/update/{id}','frontend\PlanController@update_plan')->name('update.edit');

Route::get('/approved/plan/list/view/{id}','backend\PlanController@view_approved_plan')->name('approved.plan.view')->middleware('auth');




// Package access

Route::get('/plan/detail/{id}','frontend\PlanController@plan_detail')->name('plan.detail');
Route::get('/plan/payment/{id}','frontend\PlanController@payment')->name('plan.payment');
Route::post('/plan/payment/submit/{id}','frontend\PlanController@payment_submit')->name('plan.payment.submit');
// Route::get('plan/tourist/list','backend\PlanController@plan_tourist_list')->name('plan.tourist.list');

// joined tourists list per package for backend

Route::get('/tourist/list/backend/perplan','backend\PlanController@tourist_list_per_plan')->name('backend.tourist.list.per.plan')->middleware('auth');

// My Profile

Route::get('/user/profile','frontend\UserController@user_profile')->name('user.profile');

// joined tourists list per package for frontend(my profile)
Route::get('/tourist/list/frontend/perplan','frontend\PlanController@tourist_list_per_plan')->name('tourist.list.per.plan');
Route::get('/tourist/list/perplan/approve/{id}','frontend\PlanController@tourist_approve')->name('tourist.list.approve');
Route::get('/tourist/list/perplan/receipt/{id}','frontend\PlanController@joined_tourist_receipt')->name('joined.tourist.perplan.receipt');

// Feedback

Route::get('/tourist/give/feedback','frontend\FeedbackController@give_feedback')->name('user.feedback');
Route::post('/tourist/give/feedback/submit','frontend\FeedbackController@feedback_submit')->name('user.feedback.submit');
