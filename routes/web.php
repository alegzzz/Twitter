<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthController;

Route::get('/dashboard', [DashboardController::class, "index"]) -> name('dashboard.index');

Route::get('/', [ProfileController::class, "index"]);

Route::post('/post', [PostController::class, 'store']) -> name("post.store");
Route::put("post/{post}", [PostController::class, 'update']) -> name("post.update")->middleware("auth");
Route::get("post/{post}", [PostController::class, 'show']) -> name("post.show");
Route::get("post/{post}/edit", [PostController::class, 'edit']) -> name("post.edit")->middleware("auth");
Route::delete('/post/{post}', [PostController::class, 'destroy']) -> name("post.destroy")->middleware("auth");
Route::get('/search', [PostController::class, 'search']) -> name("post.search");

// comments
Route::post('/comment/{post}', [CommentController::class, 'store']) -> name("comment.store")->middleware("auth");

Route::get('/register', [\App\Http\Controllers\AuthController::class, 'register']) -> name("register.register");
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'store']) -> name("register.store");

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login']) -> name("login.login");
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'authenticate']) -> name("login.authenticate");



