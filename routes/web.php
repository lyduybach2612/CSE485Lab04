<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Models\Borrow;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books',BookController::class);