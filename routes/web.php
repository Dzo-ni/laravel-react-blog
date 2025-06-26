<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::get('/search', [PostController::class, 'search'])->name('search.posts');
Route::resource('posts', PostController::class)->middleware('auth');

// routes/web.php
Route::post('posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store')->middleware('auth');

Route::resource('categories', CategoryController::class)->middleware('auth');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
