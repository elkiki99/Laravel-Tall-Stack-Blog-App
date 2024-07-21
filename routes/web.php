<?php

use App\Http\Controllers\HomePages;
use App\Http\Controllers\LegalPages;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;

Route::get('/', [HomePages::class, 'welcome'])->name('welcome');
Route::get('/about', [HomePages::class, 'about'])->name('about');
Route::get('/contact', [HomePages::class, 'contact'])->name('contact');
Route::get('/newsletter', [HomePages::class, 'newsletter'])->name('newsletter');

Route::get('/terms', [LegalPages::class, 'terms'])->name('terms');
Route::get('/refund', [LegalPages::class, 'refund'])->name('refund');
Route::get('/privacy', [LegalPages::class, 'privacy'])->name('privacy');
Route::get('/cookies', [LegalPages::class, 'cookies'])->name('cookies');
Route::get('/disclaimer', [LegalPages::class, 'disclaimer'])->name('disclaimer');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog1', [BlogController::class, 'show'])->name('blog.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
