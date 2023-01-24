<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

Route::controller(PageController::class)->group(function () {
    Route::get('',          'home')->name('home');
    Route::get('home',          'home')->name('home');
    Route::get('blog',          'blog')->name('blog');
    Route::get('blog/{post:slug}',   'post')->name('post');
});


Route::redirect('dashboard', 'posts')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });

    Route::resource('posts', PostController::class);
    // ->except(['index', 'show']);
});

require __DIR__ . '/auth.php';
