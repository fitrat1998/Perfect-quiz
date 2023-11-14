<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\RetrainingController;
use App\Http\Controllers\MiddleexamController;
use App\Http\Controllers\SelfstudyController;
use App\Http\Controllers\ResultController;
use Illuminate\Support\Facades\Route;





Route::get('/',[PageController::class,'index'])->name('index');
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::get('/dashboard',[QuizController::class,'index'])->name('dashboard');
Route::get('/subject',[SubjectController::class,'index'])->name('subject');
Route::get('/retraining',[RetrainingController::class,'index'])->name('retraining');
Route::get('/middleexam',[MiddleexamController::class,'index'])->name('middleexam');
Route::get('/selfstudy',[SelfstudyController::class,'index'])->name('selfstudy');
Route::get('/result',[ResultController::class,'index'])->name('result');
