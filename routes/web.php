<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomePagesController;
use App\Http\Controllers\LegalPagesController;

/**
 * Home pages.
 */
Route::get('/', [HomePagesController::class, 'welcome'])->name('welcome');
Route::get('/about', [HomePagesController::class, 'about'])->name('about');
Route::get('/contact', [HomePagesController::class, 'contact'])->name('contact');
Route::get('/newsletter', [HomePagesController::class, 'newsletter'])->name('newsletter');

/**
 * Legal pages.
 */
Route::get('/terms', [LegalPagesController::class, 'terms'])->name('terms');
Route::get('/refund', [LegalPagesController::class, 'refund'])->name('refund');
Route::get('/privacy', [LegalPagesController::class, 'privacy'])->name('privacy');
Route::get('/cookies', [LegalPagesController::class, 'cookies'])->name('cookies');
Route::get('/disclaimer', [LegalPagesController::class, 'disclaimer'])->name('disclaimer');

/**
 * Admin panel.
 */
Route::get('/panel', function() {
    return view('panel.admin-panel');
})->name('panel');

/**
 * Blog pages.
 */
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::get('/blog/{blog:slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/edit/{blog:slug}', [BlogController::class, 'edit'])->name('blog.edit');

/**
 * Category pages.
 */
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('categories.create');
Route::get('/category/{category:slug}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/category/edit/{category:slug}', [CategoryController::class, 'edit'])->name('categories.edit');

/**
 * Tag pages.
 */
Route::get('/tags', [TagController::class, 'index'])->name('tags.index');
Route::get('/tag/create', [TagController::class, 'create'])->name('tags.create');
Route::post('/tag/create', [TagController::class, 'store'])->name('tags.store');
Route::get('/tags/{tag:slug}', [TagController::class, 'show'])->name('tags.show');

/**
 * Profile.
 */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
