<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', fn () => view('auth.admin-login'))->name('admin.login.form');
