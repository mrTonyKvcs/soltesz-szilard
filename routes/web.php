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
	
	Route::get(LaravelLocalization::transRoute('routes.about'), ['as' => 'pages.about', 'uses' => 'PagesController@about']);
	// Route::get('price', ['as' => 'pages.price', 'uses' => 'PagesController@price']);
	Route::get(LaravelLocalization::transRoute('routes.contact'), ['as' => 'pages.contact', 'uses' => 'PagesController@contact']);
	Route::get(LaravelLocalization::transRoute('routes.selfness-coaching'), ['as' => 'pages.selfless-coaching', 'uses' => 'PagesController@selflessCoaching']);
	// Activities
	Route::get(LaravelLocalization::transRoute('routes.personal-coaching'), ['as' => 'activities.personal-coaching', 'uses' => 'ActivitiesController@personalCoaching']);
	Route::get(LaravelLocalization::transRoute('routes.guidance'), ['as' => 'activities.guidance', 'uses' => 'ActivitiesController@guidance']);
	Route::get(LaravelLocalization::transRoute('routes.group-trainings'), ['as' => 'activities.group-trainings', 'uses' => 'ActivitiesController@groupTrainings']);
	// Topics
	Route::get(LaravelLocalization::transRoute('routes.communication-techniques'), ['as' => 'topics.communication-techniques', 'uses' => 'TopicsController@communicationTechniques']);
	Route::get(LaravelLocalization::transRoute('routes.developing-competencies'), ['as' => 'topics.developing-competencies', 'uses' => 'TopicsController@developingCompetencies']);
	Route::get(LaravelLocalization::transRoute('routes.stress-sticking'), ['as' => 'topics.stress-sticking', 'uses' => 'TopicsController@stressSticking']);
	Route::get(LaravelLocalization::transRoute('routes.life-crises'), ['as' => 'topics.life-crises', 'uses' => 'TopicsController@lifeCrises']);
	Route::get(LaravelLocalization::transRoute('routes.reziliencia'), ['as' => 'topics.resilience', 'uses' => 'TopicsController@resilience']);
	// Blog
	Route::get(LaravelLocalization::transRoute('routes.blog.all'), ['as' => 'blog.index', 'uses' => 'BlogsController@index']);
	Route::get(LaravelLocalization::transRoute('routes.blog.show'), ['as' => 'blog.show', 'uses' => 'BlogsController@show']);
	// Trainings
	Route::get('trainings', ['as'	=> 'trainings.index', 'uses'	=> 'TrainingsController@index']);
	Route::get('training', ['as'	=> 'trainings.show', 'uses'	=> 'TrainingsController@show']);
});
Auth::routes();

// Route::get('/home', 'HomeController@index');
