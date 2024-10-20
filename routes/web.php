<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;

Route::get('/dashboard', [DashboardController::class, "index"]) -> name('dashboard.index');

Route::get('/', [ProfileController::class, "index"]);

Route::post('/post', [PostController::class, 'store']) -> name("post.store");
Route::put("post/{post}", [PostController::class, 'update']) -> name("post.update");
Route::get("post/{post}", [PostController::class, 'show']) -> name("post.show");
Route::get("post/{post}/edit", [PostController::class, 'edit']) -> name("post.edit");
Route::delete('/post/{post}', [PostController::class, 'destroy']) -> name("post.destroy");
Route::get('/search', [PostController::class, 'search']) -> name("post.search");

// comments
Route::post('/comment/{post}', [CommentController::class, 'store']) -> name("comment.store");



