<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\Admin\UserController;

Route::get("/", function () {
    return view('home');
});

Route::resource('/users', UserController::class);








