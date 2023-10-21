<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;





Route::get('/',[PageController::class,'index'])->name('index');
Route::get('/login',[LoginController::class,'index'])->name('login');
