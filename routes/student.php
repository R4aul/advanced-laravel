<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', fn () => view('auth.student-login'))->name('student.login.form');