<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
Route::get('sitemap.xml', 'SitemapsController@index');
Route::group(
  [
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localize']
  ],
  function () {
    //Pages
    // Route::get('/', ['as' => 'pages.maintenance', 'uses' => 'PagesController@maintenance']);
    Route::get('/', ['as' => 'pages.home', 'uses' => 'PagesController@home']);

    Route::get(LaravelLocalization::transRoute('routes.about'), ['as' => 'pages.about', 'uses' => 'PagesController@about']);
    // Route::get('price', ['as' => 'pages.price', 'uses' => 'PagesController@price']);
    Route::get(LaravelLocalization::transRoute('routes.contact'), ['as' => 'pages.contact', 'uses' => 'PagesController@contact']);
    Route::get(LaravelLocalization::transRoute('routes.selfness-coaching'), ['as' => 'pages.selfless-coaching', 'uses' => 'PagesController@selflessCoaching']);
    Route::get('szervezet-es-munkalelektan', ['as' => 'pages.organization', 'uses' => 'PagesController@organization']);
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
    Route::get('esemenyek', ['as'  => 'trainings.index', 'uses'  => 'TrainingsController@index']);
    Route::get('esemenyek/{id}', ['as'  => 'trainings.show', 'uses'  => 'TrainingsController@show']);

    //Mail
    Route::post('tender', ['as'  => 'mail.tender', 'uses' => 'MailController@sendTenderToSupport']);
    Route::post('contact', ['as'  => 'mail.contact', 'uses' => 'MailController@sendMailToSupport']);
  }
);

Route::middleware('guest')->group(function () {
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login')->middleware('throttle:admin-login')->name('login.post');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->middleware('throttle:password-reset')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->middleware('throttle:password-reset')->name('password.update');
});
Route::post('logout', 'Auth\LoginController@logout')->middleware('auth')->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('admin', 'HomeController@index')->name('admin.index');
    Route::resource('admin/olvasmanyok', 'Admin\BlogsController')->only(['index', 'store', 'edit', 'update', 'destroy']);
    Route::resource('admin/esemenyek', 'Admin\TrainingsController')->only(['index', 'store', 'edit', 'update', 'destroy']);
    Route::resource('admin/jelentkezok', 'Admin\ApplicantsController')->only(['index', 'destroy']);
});
