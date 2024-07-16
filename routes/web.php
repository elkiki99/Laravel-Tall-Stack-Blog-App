<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/blog', [BlogController::class, 'index'])->middleware(['auth', 'verified'])->name('blog.index');
Route::get('/blog1', [BlogController::class, 'show'])->middleware(['auth', 'verified'])->name('blog.show');

Route::get('/about', function () {
    return view('about');
})->middleware(['auth', 'verified'])->name('about');

Route::get('/contact', function () {
    return view('contact-us');
})->middleware(['auth', 'verified'])->name('contact');

Route::get('/newsletter', function () {
    return view('newsletter');
})->middleware(['auth', 'verified'])->name('newsletter');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
