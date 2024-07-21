<?php

use App\Http\Controllers\HomePagesController;
use App\Http\Controllers\LegalPagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;

Route::get('/', [HomePagesController::class, 'welcome'])->name('welcome');
Route::get('/about', [HomePagesController::class, 'about'])->name('about');
Route::get('/contact', [HomePagesController::class, 'contact'])->name('contact');
Route::get('/newsletter', [HomePagesController::class, 'newsletter'])->name('newsletter');

Route::get('/terms', [LegalPagesController::class, 'terms'])->name('terms');
Route::get('/refund', [LegalPagesController::class, 'refund'])->name('refund');
Route::get('/privacy', [LegalPagesController::class, 'privacy'])->name('privacy');
Route::get('/cookies', [LegalPagesController::class, 'cookies'])->name('cookies');
Route::get('/disclaimer', [LegalPagesController::class, 'disclaimer'])->name('disclaimer');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog1', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
// Route::get('/blog/{blog:slug}', [BlogController::class, 'show'])->name('blog.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
