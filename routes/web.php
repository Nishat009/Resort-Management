<?php

use Illuminate\Support\Facades\Route;
// backend
use  App\Http\Controllers\Backend\EmployeeManageController;
use  App\Http\Controllers\Backend\RoomDetailController;
use  App\Http\Controllers\Backend\OtherServiceController ;
use  App\Http\Controllers\Backend\ReservationController ; 
use  App\Http\Controllers\Backend\UserController ;
use  App\Http\Controllers\Backend\DashboardController ;

// frontend
use  App\Http\Controllers\Frontend\CustomerController ;
use  App\Http\Controllers\Frontend\RoomReservationController ;
use  App\Http\Controllers\Frontend\HomeController ;
//home page view
Route::get('/',[HomeController ::class,'home'])->name('home');


//backend

//for admin panel
Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'admin-auth'], function () {

// dashboard
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

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
Route::get('/roomDetailEdit/{id}',[RoomDetailController::class,'roomDetailEdit'])->name('roomDetailEdit');
Route::put('/roomDetailUpdate/{id}',[RoomDetailController::class,'roomDetailUpdate'])->name('roomDetailUpdate');

// 
Route::get('/seeReservation',[ReservationController ::class,'seeReservation'])->name('seeReservation');
Route::get('/seeReservation/{id}/{status}', [ReservationController::class, 'completedUpdate'])->name('completedUpdate');
//other service

Route::get('/otherService',[OtherServiceController::class,'otherService'])->name('otherService');
Route::post('/otherServiceCreate',[OtherServiceController::class,'otherServiceCreate'])->name('otherServiceCreate');
Route::get('/otherServiceDelete/{id}',[OtherServiceController::class,'otherServiceDelete'])->name('otherServiceDelete');
Route::get('/otherServiceEdit/{id}',[OtherServiceController::class,'otherServiceEdit'])->name('otherServiceEdit');
Route::put('/otherServiceUpdate/{id}',[OtherServiceController::class,'otherServiceUpdate'])->name('otherServiceUpdate');

// reservation

    });
});

//admin login form
Route::get('/adminLogin',[UserController::class,'loginForm'])->name('login');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
Route::post('/dashboard',[UserController::class,'doLogin'])->name('doLogin');

// user login
Route::get('/login-registration',[CustomerController::class, 'userLoginRegistration'])->name('login.registration.form');
Route::post('/registration', [CustomerController::class, 'registration'])->name('registration');
Route::post('/userLogin',[CustomerController::class, 'userLogin'])->name('userLogin');
Route::get('/userLogout',[CustomerController::class,'userLogout'])->name('userLogout'); 

// for user panel
Route::group(['prefix' => 'user'], function () {
    Route::group(['middleware' => 'user-auth'], function () {


// user profile
Route::get('/userProfile',[CustomerController::class,'userProfile'])->name('userProfile');
//user reservation
Route::get('/roomReservation/get/{id}',[RoomReservationController::class,'roomReservation'])->name('roomReservation');
Route::post('/reservation',[RoomReservationController::class,'reservation'])->name('reservation');
Route::get('/reservationTable',[RoomReservationController::class,'reservationTable'])->name('reservationTable');

});
});