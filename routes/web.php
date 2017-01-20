<?php
Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localize']
], 
function()
{
	Route::get('/', ['as' => 'pages.home', 'uses' => 'PagesController@home']);
});
Auth::routes();

// Route::get('/home', 'HomeController@index');
