<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', [DashboardController::class, "index"]);

Route::get('/', [ProfileController::class, "index"]);

Route::post('/post', [ProfileController::class, "store"]) -> name("post.store");


