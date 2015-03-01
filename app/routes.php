<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('storage', function()
{
	return "Buy/Rent for Storage";
});

Route::get('custom', function()
{
	return "Custom Homes or Offices";
});

Route::get('contact', function()
{
	return "Contact Info";
});

Route::get('login', 'HomeController@showLogin');
Route::post('login', 'HomeController@doLogin');
Route::get('logout', 'HomeController@doLogout');

Route::resource('posts', 'PostsController');

