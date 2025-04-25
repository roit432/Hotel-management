<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home.index');
});


route::get('home',[UserController::class,'user'])->name('home');
route::get('create_room',[UserController::class,'create_room']);
route::post('add_room',[UserController::class,'add_room']);
route::get('view_room',[UserController::class,'view_room']);
route::get('delete_room/{id}',[UserController::class,'delete_room']);
route::get('update_room/{id}',[UserController::class,'update_room']);
route::post('edit_room/{id}',[UserController::class,'edit_room']);
Route::get('/', [UserController::class, 'home']);
route::get('room_details/{id}',[HomeController::class,'room_details']);
route::post('add_booking/{id}',[HomeController::class,'add_booking']);//posting to the booking
Route::get('bookings',[HomeController::class,'bookings']);//rendering the bookin blade file
Route::get('delete_booking/{id}',[HomeController::class,'delete_booking']);//delete route for delete the route
Route::get('view_gallary',[HomeController::class,'view_gallary']);//showing the gallary file
Route::post('upload_gallary',[HomeController::class,'upload_gallary']);//uploading to images
Route::get('delete_gallary/{id}',[HomeController::class,'delete_gallary']);//deleting gallary images 
Route::post('/',[UserController::class,'contact']);
Route::get('all_message',[HomeController::class,'all_message']);
Route::get('send_mail/{id}',[HomeController::class,'send_mail']);
Route::post('mail/{id}',[HomeController::class,'mail']);
Route::get('approve_book/{id}',[HomeController::class,'approve_book']);
Route::get('reject_book/{id}',[HomeController::class,'reject_book']);

