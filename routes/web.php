<?php

//admin routes

Route::get('/manage', function () {
    return view('manage.index');
})->name('index');

Route::get('/view_about', 'AboutController@index')->name('view_about');
Route::get('/create_about', 'AboutController@create')->name('create_about');
Route::post('/store_about', 'AboutController@store')->name('store_about');
Route::get('/edit_about/{id}', 'AboutController@edit')->name('edit_about');
Route::post('/update_about/{id}', 'AboutController@update')->name('update_about');

//common
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

Route::get('/news', function (){
	return view('news');
})->name('news');

