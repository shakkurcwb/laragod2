<?php

# Guest
Route::get('/', function () { return view('welcome'); })->name('welcome');

Auth::routes([ 'register' => true ]);

# Auth
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/help', 'HelpController@index')->name('help');
Route::post('/help/search', 'HelpController@search');

Route::get('/profile', 'ProfileController@edit')->name('profile');
Route::patch('/profile', 'ProfileController@update');

Route::get('/settings', 'SettingsController@edit')->name('settings');
Route::patch('/settings', 'SettingsController@update');

Route::get('/feedback', 'FeedbackController@create')->name('feedback');
Route::post('/feedback', 'FeedbackController@store');

# Admin
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// Users
Route::get('/users', 'UserController@index')->name('users');
Route::get('/users/create', 'UserController@create');
Route::get('/users/{id}', 'UserController@show');
Route::get('/users/{id}/edit', 'UserController@edit');
Route::get('/users/{id}/delete', 'UserController@delete');

Route::post('/users/search', 'UserController@search');
Route::post('/users', 'UserController@store');
Route::patch('/users/{id}', 'UserController@update');
Route::delete('/users/{id}', 'UserController@destroy');