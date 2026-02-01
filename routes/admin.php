<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthAdminController;
use App\Http\Controllers\Admin\StudentController;

Route::get('/login', fn () => view('auth.admin-login'))->name('admin.login.form');

Route::post('/login', [AuthAdminController::class,'login'])->name('admin.login');

Route::middleware('auth')->group(function() {

    Route::get('/dashboard', fn ()=> view('admin.dashboard'))->name('admin.dashboard');

    Route::post('/logout',[AuthAdminController::class,'logout'])->name('admin.logout');

    Route::resource('/students', StudentController::class)
        ->parameters([
            'students'=>'id'
        ])
        ->except(['show','destroy'])->names('admin.students');

});