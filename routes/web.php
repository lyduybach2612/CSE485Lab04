<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReaderController;

Route::resource('readers', ReaderController::class);

Route::delete('/readers/{id}', [ReaderController::class, 'destroy'])->name('readers.destroy');


Route::get('/', function () {
    return view('welcome');
});
