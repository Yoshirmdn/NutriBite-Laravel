<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('LandingPage');
});
Route::resource('/products', ProductController::class);
Route::resource('/blogs', BlogController::class);
