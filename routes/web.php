<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('/thread/{id}', 'ThreadController@show')->name('home.thread');

Auth::routes();


Route::middleware('auth')->group(function() {
    Route::get('/profile', 'ProfileController@index')->name('profile');

    // http://forum_a42a.lessen/admin/dashboard
    Route::middleware('isadmin')->prefix('admin')->group(function() {
        Route::get('/dashboard', 'AdminController@index')->name('dashboard');
    });
});
