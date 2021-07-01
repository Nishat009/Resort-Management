<?php

use Illuminate\Support\Facades\Route;
// backend
use  App\Http\Controllers\Backend\EmployeeManageController;
use  App\Http\Controllers\Backend\RoomDetailController;
use  App\Http\Controllers\Backend\OtherServiceController ;
use  App\Http\Controllers\Backend\ReservationController ; 
use  App\Http\Controllers\Backend\UserController ;
use  App\Http\Controllers\Backend\DashboardController ;
use  App\Http\Controllers\Backend\GalleryController ;
use  App\Http\Controllers\Backend\ContactController ;
// frontend
use  App\Http\Controllers\Frontend\CustomerController ;
use  App\Http\Controllers\Frontend\RoomReservationController ;
use  App\Http\Controllers\Frontend\HomeController ;
use  App\Http\Controllers\Frontend\AboutUsController ;
use  App\Http\Controllers\Frontend\ReviewController ;
use  App\Http\Controllers\Frontend\ImageController ;
//home page view
Route::get('/',[HomeController ::class,'home'])->name('home');


//about us
Route::get('/aboutUs',[AboutUsController::class,'aboutUs'])->name('aboutUs');
//about us
 Route::get('/seeGallery',[ImageController::class,'seeGallery'])->name('seeGallery');
// view all services
Route::get('/viewAllServices',[HomeController::class, 'viewAllServices'])->name('viewAllServices');

// search room
Route::get('/searchRoom',[RoomDetailController::class,'searchRoom'])->name('searchRoom');
// view room
Route::get('/room',[HomeController::class,'room'])->name('room');
// view contact form
 Route::get('/contact',[HomeController::class,'contact'])->name('contact');
 Route::post('/contactForm',[HomeController::class,'contactForm'])->name('contactForm');
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
Route::get('/roomDetail/{id}/{publishedStatus}',[RoomDetailController::class,'roomUpdate'])->name('roomUpdate');
Route::put('/roomDetailUpdate/{id}',[RoomDetailController::class,'roomDetailUpdate'])->name('roomDetailUpdate');

// reservation
Route::get('/seeReservation',[ReservationController ::class,'seeReservation'])->name('seeReservation');
Route::get('/seeReservation/{id}/{status}', [ReservationController::class, 'completeUpdate'])->name('completeUpdate');
Route::get('/reservationPaid/{id}/{status}',[ReservationController::class,'reservationPaid'])->name('reservationPaid');
//other service

Route::get('/otherService',[OtherServiceController::class,'otherService'])->name('otherService');
Route::post('/otherServiceCreate',[OtherServiceController::class,'otherServiceCreate'])->name('otherServiceCreate');
Route::get('/otherServiceDelete/{id}',[OtherServiceController::class,'otherServiceDelete'])->name('otherServiceDelete');
Route::get('/otherServiceEdit/{id}',[OtherServiceController::class,'otherServiceEdit'])->name('otherServiceEdit');
Route::get('/otherService/{id}/{status}',[OtherServiceController::class,'completedUpdate'])->name('completedUpdate');
Route::put('/otherServiceUpdate/{id}',[OtherServiceController::class,'otherServiceUpdate'])->name('otherServiceUpdate');

// gallery
Route::get('/gallery',[GalleryController::class,'gallery'])->name('gallery');
Route::post('/galleryCreate',[GalleryController::class,'galleryCreate'])->name('galleryCreate');
Route::get('/galleryDelete/{id}',[GalleryController::class,'galleryDelete'])->name('galleryDelete');

// report
 Route::get('/report',[ReservationController::class,'report'])->name('report');
//CONTACT
Route::get('/seeContact',[ContactController ::class,'seeContact'])->name('seeContact');

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
Route::get('/roomReservation/get/{id}/{checkInDate}/{checkOutDate}',[RoomReservationController::class,'roomReservation'])->name('roomReservation');
Route::post('/reservation',[RoomReservationController::class,'reservation'])->name('reservation');
Route::get('/reservationTable',[RoomReservationController::class,'reservationTable'])->name('reservationTable');
Route::get('/cancelUpdate/{id}', [RoomReservationController::class, 'cancelUpdate'])->name('cancelUpdate');

// review
Route::get('/writeReview',[ReviewController::class,'writeReview'])->name('writeReview');
Route::post('/submitReview',[ReviewController::class,'submitReview'])->name('submitReview');

});
});