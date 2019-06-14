<?php

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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/csr', function () {
    return view('csr');
})->name('csr');


Route::get('/careers', function () {
    return view('careers');
})->name('careers');

Route::get('/contactus', function () {
    return view('contact');
})->name('contact');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/livetv', function () {
    return view('livetv');
})->name('livetv');


Route::get('/radio', function () {
    return view('radio');
})->name('radio');



