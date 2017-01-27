<?php
Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localize']
], 
function()
{
	//Pages
	Route::get('/', ['as' => 'pages.home', 'uses' => 'PagesController@home']);
	Route::get('motivation', ['as' => 'pages.motivation', 'uses' => 'PagesController@motivation']);
	Route::get('about', ['as' => 'pages.about', 'uses' => 'PagesController@about']);
	Route::get('price', ['as' => 'pages.price', 'uses' => 'PagesController@price']);
	Route::get('contact', ['as' => 'pages.contact', 'uses' => 'PagesController@contact']);
	// Blog
	Route::get('blog', ['as' => 'blog.index', 'uses' => 'BlogsController@index']);
	Route::get('blog/slug', ['as' => 'blog.show', 'uses' => 'BlogsController@index']);
	// Trainings
	Route::get('trainings', ['as'	=> 'trainings.index', 'uses'	=> 'TrainingsController@index']);
});
Auth::routes();

// Route::get('/home', 'HomeController@index');
