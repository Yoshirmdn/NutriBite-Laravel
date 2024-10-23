<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('LandingPage');
});
Route::resource('/products', \App\Http\Controllers\ProductController::class);
