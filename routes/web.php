<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', [StudentController::class, 'index'])->name('front.home');
Route::get('about', [StudentController::class, 'about'])->name('front.about');

