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

Route::get('/', array('as' => 'homepage', 'uses' => 'HomeController@homepage'));
Route::get('about.html', array('as' => 'about', 'uses' => 'HomeController@about'));
Route::get('contact.html', array('as' => 'contact', 'uses' => 'HomeController@contact'));
Route::get('faq.html', array('as' => 'faq', 'uses' => 'HomeController@faq'));
Route::get('on-going.html', array('as' => 'on-going', 'uses' => 'HomeController@onGoing'));

Route::get('series/{nameDramas}-episode-{id}.html', array('as' => 'watch', 'uses' => 'HomeController@watch'))
->where(array('nameDramas' => '[a-zA-Z0-9-_]+', 'id' => '[0-9]+'));

Route::get('series/{nameDramas}.html', array('as' => 'series', 'uses' => 'HomeController@series'))
->where(array('nameDramas' => '[a-zA-Z0-9-_]+'));

Route::get('/register', array('as' => 'register', 'uses' => 'UserController@register'));
Route::get('/login', array('as' => 'login', 'uses' => 'UserController@login'));
Route::get('/logout', array('as' => 'logout', 'uses' => 'UserController@logout'));
Route::post('/dologin', array('as' => 'dologin', 'uses' => 'UserController@dologin'));
