<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;





Route::get('/',[PageController::class,'index'])->name('index');
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::get('/dashboard',[QuizController::class,'index'])->name('dashboard');
Route::get('/subject',[QuizController::class,'index'])->name('subject');
