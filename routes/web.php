<?php

use App\Http\Controllers\BorrowController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Models\Borrow;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('borrows',BorrowController::class);
Route::resource('books',BookController::class);
