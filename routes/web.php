<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimonialsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/index",[HomeController::class, 'index'])->name('index');

Route::get('/aboutus', [AboutusController::class, 'index'])->name('aboutus');

Route::get('/product', [ProductController::class, 'index'])->name('product');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/blog',[BlogController::class, 'index'])->name('blog');

Route::get('/testimonials',[TestimonialsController::class, 'index'])->name('testimonials');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
         return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/diseasedetail', [ProductDetailController::class, 'index'])->name('diseasedetail');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
