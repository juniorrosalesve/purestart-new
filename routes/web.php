<?php

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