<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('posts', PostController::class);
Route::post('posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('about', [PostController::class, 'about'])->name('about');
Route::get('service', [PostController::class, 'service'])->name('service');
Route::get('project', [PostController::class, 'project'])->name('project');
Route::get('contact', [PostController::class, 'contact'])->name('contact');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
