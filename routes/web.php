<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.index');
})->name('front.index');

Route::get('/about', function () {
    return view('front.about');
})->name('front.about');

Route::get('/contact', function () {
    return view('front.contact');
})->name('front.contact');

Route::get('/packet', function () {
    return view('front.packet');
})->name('front.packet');
