<?php

/** All admin route are here **/

Route::group(['namespace' => 'Admin', 'prefix' => '/admin', 'middleware' => ['auth', 'admin'], 'as' => 'admin.'], function() {

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/supporters', 'SupporterController@index')->name('supporters');
    Route::get('/members', 'MemberController@index')->name('members');
    Route::get('/contact', 'ContactController@index')->name('contact');
    Route::put('/contact/{id}/update', 'ContactController@update')->name('contact.update');

    Route::resources([
        
        'categories'     => 'CategoryController',
        'users'          => 'UserController',
        'blogs'          => 'BlogController',
        'pages'          => 'PageController',
        'sliders'        => 'SliderController',
        'events'         => 'EventController',
        'galleries'      => 'GalleryController',
        'branches'       => 'BranchController',
        'news'           => 'NewsController',
    ]);

});