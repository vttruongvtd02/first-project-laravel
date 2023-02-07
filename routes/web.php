<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\User\UserController;

Route::get("/", function () {
    return view('home');
});

Route::get('/admin', function () {
    return "This is the admin page";
});

Route::get('/products', function () {
    return "This is the product page";
});

Route::get('/users', [
    UserController::class, 'index'
]);





