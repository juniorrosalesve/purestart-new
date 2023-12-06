<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VentasController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('post/{nombre}/{id}', [BlogController::class, 'post'])->name('post');

Route::get('shop', function() {
    return view('shop');
})->name('shop');

Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('dashboard', function() {
        return view('dashboard');
    })->name('dashboard');
    Route::prefix('admin')->group(function() {
        Route::prefix('ventas')->group(function() {
            Route::get('/', [VentasController::class, 'index'])->name('ventas');
        });
        Route::prefix('clientes')->group(function() {
            Route::get('/', [ClienteController::class, 'index'])->name('clientes');
        });

        Route::prefix('categorias')->group(function() {
            Route::get('/', [CategoriaController::class, 'index'])->name('categorias');
            Route::get('nueva-categoria', [CategoriaController::class, 'add'])->name('addCategoria');


            Route::post('crear-categoria', [CategoriaController::class, 'store'])->name('storeCategoria');
        });
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
