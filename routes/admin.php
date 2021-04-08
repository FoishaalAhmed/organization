<?php

/** All admin route are here **/

Route::group(['namespace' => 'Admin', 'prefix' => '/admin', 'middleware' => ['auth', 'admin'], 'as' => 'admin.'], function() {

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

});