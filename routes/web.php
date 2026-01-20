<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn ()=> view('public.home'))->name('home');

Route::get('/about', fn () => view('public.about'))->name('about');

Route::get('/programs', fn () => view('public.programs'))->name('programs');

Route::get('/admissions', fn () => view('public.admissions'));

Route::get('/news', fn ()=> view('public.news.index'));

Route::get('/contact', fn () => view('public.contact'))->name('contact');
