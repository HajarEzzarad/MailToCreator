<?php


use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/email', [App\Http\Controllers\EmailController::class, 'showContactForm']);
Route::POST('/email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('mail.contact');

