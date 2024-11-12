<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::post('/upload_doctor',[AdminController::class,'upload']);

Route::post('/appointments',[HomeController::class,'section']);

Route::get('/MyAppoinment',[HomeController::class,'MyAppoinment']);

Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);
Route::get('/show_apointments',[HomeController::class,'show_apointments']);

Route::get('/appruve/{id}',[HomeController::class,'appruve']);
Route::get('/show_doctors',[HomeController::class,'show_doctors']);

Route::get('/delet_doct/{id}',[HomeController::class,'delet_doct']);

Route::get('/updatdoc/{id}',[HomeController::class,'updatdoc']);

Route::get('/about',[HomeController::class,'about']);

Route::get('/doctor',[HomeController::class,'doctors']);

Route::post('/editdoc/{id}',[AdminController::class,'editdoc']);

Route::get('/snd_mail/{id}',[AdminController::class,'snd_mail']);
Route::post('/sendemail/{id}',[AdminController::class,'sendemail']);
