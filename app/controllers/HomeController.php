<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}
	public function showP3()
	{
		return View::make('page3');
	}
	public function showP4()
	{
		return View::make('page4');
	}
	public function showP5()
	{
		return View::make('page5');
	}
	public function showP6()
	{
		return View::make('page6');
	}
	public function showP7()
	{
		return View::make('page7');
	}


	public function showMenu()
	{
		return View::make('menu');
	}

}
