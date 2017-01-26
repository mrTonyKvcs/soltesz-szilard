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
	// Blog
	Route::get('blog', ['as' => 'blog.index', 'uses' => 'BlogsController@index']);
	Route::get('blog/slug', ['as' => 'blog.show', 'uses' => 'BlogsController@index']);
});
Auth::routes();

// Route::get('/home', 'HomeController@index');
