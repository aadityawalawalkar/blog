<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/*** My Custom Routes - Start ***/
Route::get('contact', 'WelcomeController@contact');

// Passing data to view
Route::get('about', 'PagesController@about');

// Master Page / layout
Route::get('about-us', 'PagesController@aboutUs');

Route::get('foo', function() {
  return 'foo';
});

// Fetch all articles from db
Route::get('articles', 'ArticlesController@index');

// Create an article (Article add form)
// This route should be placed before the wild character route with same url
// e.g. before the route 'articles/{id}'. Otherwise this wild character route will be called instead.
Route::get('articles/create', 'ArticlesController@create');

// Fetch a specific article from db
Route::get('articles/{id}', 'ArticlesController@show');

// Store Article in db
Route::post('articles/store', 'ArticlesController@store');
/*** My Custom Routes - End ***/
