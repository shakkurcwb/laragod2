<?php

# Guest
Route::get('/', function () { return view('welcome'); })->name('welcome');

Auth::routes([ 'register' => true ]);

# Auth
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/help', 'HelpController@index')->name('help');

Route::get('/profile', 'ProfileController@edit')->name('profile');
Route::patch('/profile', 'ProfileController@update');

Route::get('/settings', 'SettingsController@edit')->name('settings');
Route::patch('/settings', 'SettingsController@update');

Route::get('/feedback', 'FeedbackController@create')->name('feedback');
Route::post('/feedback', 'FeedbackController@store');

# Admin
Route::get('/dashboard', 'DashboardController@index')->name('home');

// Users
Route::get('/users', 'UserController@index')->name('users');
Route::post('/users', 'UserController@store');
Route::delete('/users', 'UserController@destroy');
Route::get('/users/create', 'UserController@create');
Route::post('/users/search', 'UserController@search');
Route::get('/users/{id}', 'UserController@show');
Route::patch('/users/{id}', 'UserController@update');
Route::get('/users/{id}/edit', 'UserController@edit');