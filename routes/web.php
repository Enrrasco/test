<?php

Route::get('/', 'PagesController@home')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



/*

Route::get('/', function () {
    return view('pages.index');

});
Route::get('/contact', function () {
    return view('pages.contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');


Route::get('/', 'PagesController@home')->name('home');

Route::post('/contact', 'PagesController@store')->name('contact.store');
Route::get('/thanks/{name}', 'PagesController@thanks')->name('thanks');
*/