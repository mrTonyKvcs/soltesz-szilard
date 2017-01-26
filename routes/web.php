<?php
Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localize']
], 
function()
{
	Route::get('/', ['as' => 'pages.home', 'uses' => 'PagesController@home']);
	Route::get('price', ['as' => 'pages.price', 'uses' => 'PagesController@price']);
	Route::get('contact', ['as' => 'pages.contact', 'uses' => 'PagesController@contact']);
});
Auth::routes();

// Route::get('/home', 'HomeController@index');
