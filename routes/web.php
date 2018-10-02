<?php

Route::get('/test', 'Entries@index');
Route::get('/test/{id}', 'Entries@show');
Route::get('/inregistrare', 'Entries@inregistrare');
Route::post('/test', 'Entries@store');


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
