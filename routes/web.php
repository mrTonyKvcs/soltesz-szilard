<?php
Route::get('/', ['as' => 'pages.home', 'uses' => 'PagesController@home']);

Auth::routes();

// Route::get('/home', 'HomeController@index');
