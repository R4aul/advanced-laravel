<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\AuthStudentController;

Route::get('/login', fn () => view('auth.student-login'))->name('student.login.form');

Route::post('/login', [AuthStudentController::class,'login'])->name('student.login');

Route::middleware('auth:student')->group(function(){

    Route::get('/dashboard', fn () => view('student.dashboard'))->name('student.dashboard');

    Route::post('/logout', [AuthStudentController::class,'logout'])->name('student.logout');

});