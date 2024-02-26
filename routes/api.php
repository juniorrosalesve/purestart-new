<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('mail/suscribe-new', [MailController::class, 'new_mail_subscription'])->name('mail-suscribe-new');
Route::post('mail/contact', [MailController::class, 'contact'])->name('mail-contact');
Route::post('mail/test', [MailController::class, 'test_mail']);