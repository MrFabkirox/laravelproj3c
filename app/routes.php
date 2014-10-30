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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/p2', function()
{
	echo'echo route2';
	return View::make('page2');
});

Route::get('/p3',"HomeController@showP3");

Route::get('/p4',"HomeController@showP4");

Route::get('/p5',"HomeController@showP5");

Route::get('/p6',"HomeController@showP6");

Route::get('/p7',"HomeController@showP7");


Route::get('/menu',"HomeController@showMenu");

