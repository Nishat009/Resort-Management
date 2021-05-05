<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Backend\EmployeeManageController;
use  App\Http\Controllers\Backend\RoomDetailController;
use  App\Http\Controllers\Backend\OtherServiceController ;
use  App\Http\Controllers\Frontend\HomeController ;
use  App\Http\Controllers\Backend\UserController ;
use  App\Http\Controllers\Backend\DashboardController ;
use  App\Http\Controllers\Frontend\CustomerController ;
use  App\Http\Controllers\Frontend\RoomReservationController ;

//home page view
Route::get('/',[HomeController ::class,'home'])->name('home');


//backend

//show admin page

// Route::get('/admin', function () {
//     return view('backEnd.main');
// });
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
//admin login form
Route::get('/adminLogin',[UserController::class,'loginForm'])->name('login');
Route::post('/dashboard',[UserController::class,'doLogin'])->name('doLogin');
// user login
Route::get('/login-registration',[CustomerController::class, 'userLoginRegistration'])->name('login.registration.form');
Route::post('/registration', [CustomerController::class, 'registration'])->name('registration');
Route::post('/userLogin',[CustomerController::class, 'userLogin'])->name('userLogin');
Route::get('/userLogout',[CustomerController::class,'userLogout'])->name('userLogout'); 
// user profile
Route::get('/userProfile',[CustomerController::class,'userProfile'])->name('userProfile');
//user reservation
Route::get('/roomReservation',[RoomReservationController::class,'roomReservation'])->name('roomReservation');

// employee details
Route::get('/employeeManage',[EmployeeManageController::class,'employeeManage'])->name('employee');
Route::post('/CreateEmployeeManage',[EmployeeManageController::class,'employeeCreate'])->name('employeeCreate');
Route::get('/employeeDelete/{id}',[EmployeeManageController::class,'employeeDelete'])->name('employeeDelete');
Route::get('/employeeEdit/{id}',[EmployeeManageController::class,'employeeEdit'])->name('employeeEdit');
Route::put('/employeeUpdate/{id}',[EmployeeManageController::class,'employeeUpdate'])->name('employeeUpdate');
// room details

Route::get('/roomDetail',[RoomDetailController ::class,'roomDetail'])->name('roomDetail');
Route::post('/roomDetailCreate',[RoomDetailController::class,'roomDetailCreate'])->name('roomDetailCreate');
Route::get('/roomDetailDelete/{id}',[RoomDetailController::class,'roomDetailDelete'])->name('roomDetailDelete');


//other service

Route::get('/otherService',[OtherServiceController::class,'otherService'])->name('otherService');
Route::post('/otherServiceCreate',[OtherServiceController::class,'otherServiceCreate'])->name('otherServiceCreate');
Route::get('/otherServiceDelete/{id}',[OtherServiceController::class,'otherServiceDelete'])->name('otherServiceDelete');
Route::get('/otherServiceEdit/{id}',[OtherServiceController::class,'otherServiceEdit'])->name('otherServiceEdit');
Route::put('/otherServiceUpdate/{id}',[OtherServiceController::class,'otherServiceUpdate'])->name('otherServiceUpdate');
