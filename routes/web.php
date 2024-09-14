<?php

use App\Http\Controllers\InstituteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users/create',[InstituteController::class,'create_std'])->name('users.create');