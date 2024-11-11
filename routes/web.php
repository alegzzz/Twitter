<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthController;

Route::get('', [DashboardController::class, "index"]) -> name('dashboard.index');


Route::group([ 'prefix' => '/post/', 'as' => 'post.' ],
    function () {

        Route::get('', [ProfileController::class, "index"]);

        Route::post('', [PostController::class, 'store']) -> name("store");
        Route::put("{post}", [PostController::class, 'update']) -> name("update");

        Route::group(['middleware' => ['auth']],
        function () {
            Route::get("{post}", [PostController::class, 'show']) -> name("show");
            Route::get("{post}/edit", [PostController::class, 'edit']) -> name("edit");
            Route::delete('{post}', [PostController::class, 'destroy']) -> name("destroy");
            Route::get('search', [PostController::class, 'search']) -> name("search");
        });

    });

// comments
Route::post('/comment/{post}', [CommentController::class, 'store']) -> name("comment.store")->middleware("auth");



Route::get('/register', [AuthController::class, 'register']) -> name("register.register");
Route::post('/register', [AuthController::class, 'store']) -> name("register.store");

Route::get('/login', [AuthController::class, 'login']) -> name("login.login");
Route::post('/login', [AuthController::class, 'authenticate']) -> name("login.authenticate");



