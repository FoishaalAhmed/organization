<?php

Route::group(['middleware' => ['auth']], function () {

    //Route::get('/home', 'HomeController@index')->name('home');
    /** profile route start **/
    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::post('/profile', 'ProfileController@photo')->name('profile');
    Route::post('/password', 'ProfileController@password')->name('password.change');
    Route::post('/profile-update', 'ProfileController@update')->name('profile.update');
    /** profile route end **/
});

Route::group(['namespace' => 'Frontend'], function () {

    Route::get('/', 'HomeController@index');
    Route::get('/support', 'HomeController@support')->name('support');
    Route::post('/support/send', 'HomeController@sendSupport')->name('send.support');
    
    Route::get('/about-us', 'AboutController@index')->name('about');
    Route::get('/blogs', 'AboutController@blogs')->name('blogs');
    Route::get('/blog/{id}/{title_slug}', 'AboutController@detail')->name('blog.detail');
    Route::get('/events', 'EventController@index')->name('events');
    Route::get('/photos', 'EventController@photos')->name('photos');
    Route::get('/videos', 'EventController@videos')->name('videos');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
