<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MailController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('{nombre}/{id}', [BlogController::class, 'post'])->name('post');

Route::get('shop', function() {
    return view('shop');
})->name('shop');
