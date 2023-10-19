<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('about', function() {
    return view('about');
})->name('about');

Route::get('services', function() {
    return view('services');
})->name('services');

Route::get('faq', function() {
    return view('faq');
})->name('faq');

Route::get('shop', function() {
    return view('shop');
})->name('shop');

Route::get('contact', function() {
    return view('contact');
})->name('contact');
