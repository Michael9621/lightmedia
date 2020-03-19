<?php

//admin routes

Route::get('/manage', function () {
    return view('manage.index');
})->name('index');

//about
Route::get('/view_about', 'AboutController@index')->name('view_about');
Route::get('/create_about', 'AboutController@create')->name('create_about');
Route::post('/store_about', 'AboutController@store')->name('store_about');
Route::get('/edit_about/{id}', 'AboutController@edit')->name('edit_about');
Route::post('/update_about/{id}', 'AboutController@update')->name('update_about');

//contact
Route::get('/view_contact','ContactController@index')->name('view_contact');
Route::get('/create_contact', 'ContactController@create')->name('create_contact');
Route::post('/store_contact', 'ContactController@store')->name('store_contact');
Route::get('/edit_contact/{id}', 'ContactController@edit')->name('edit_contact');
Route::post('/update_contact/{id}', 'ContactController@update')->name('update_contact');

//careers
Route::get('/view_careers', 'CareerController@index')->name('view_careers');
Route::get('/create_career', 'CareerController@create')->name('create_career');
Route::post('/store_career', 'CareerController@store')->name('store_career');
Route::get('/edit_career/{id}', 'CareerController@edit')->name('edit_career');
Route::post('/update_career/{id}', 'CareerController@update')->name('update_career');

//csr
Route::get('/view_csr', 'BlogController@index')->name('view_csr');
Route::get('/create_csr', 'BlogController@create')->name('create_csr');
Route::post('/store_csr', 'BlogController@store')->name('store_csr');
Route::get('/edit_csr/{id}', 'BlogController@edit')->name('edit_csr');
Route::post('/update_csr/{id}', 'BlogController@update')->name('update_csr');
Route::get('/delete_csr/{id}', 'BlogController@destroy')->name('delete_csr');


//common
Route::get('/', 'FrontEndController@index')->name('home');

Route::get('/about', 'FrontEndController@about')->name('about');

Route::get('/careers', 'FrontEndController@careers')->name('careers');

Route::get('/contactus', 'FrontEndController@contactus')->name('contact');

Route::get('/csr', 'FrontEndController@csr')->name('csr');

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

