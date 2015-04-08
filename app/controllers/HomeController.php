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

	public function homepage()
	{
	    var_dump(Session::all());
	    $data['title'] = 'Home Page';
	    $data['track'] = 'homepage';
		return View::make('frontend.pages.homepage')->with($data);
	}
	public function onGoing()
	{
	    $data['title'] = 'On Going';
	    $data['track'] = 'on-going';
	    return View::make('frontend.pages.ongoing')->with($data);
	}
	public function series()
	{
	    $data['title'] = 'Bouty Lady 123';
	    $data['track'] = 'series';
	    return View::make('frontend.pages.series')->with($data);
	}
	
	public function watch()
	{
	    $data['title'] = 'Watching Bouty Lady 123';
	    $data['track'] = 'watch';
	    return View::make('frontend.pages.watch')->with($data);
	}
	
	public function about()
	{
	    $data['title'] = 'About';
	    $data['track'] = 'about';
	    return View::make('frontend.pages.about')->with($data);
	}
	
	public function contact()
	{
	    $data['title'] = 'Contact';
	    $data['track'] = 'contact';
	    return View::make('frontend.pages.contact')->with($data);
	}
	
	public function faq()
	{
	    $data['title'] = 'FAQ';
	    $data['track'] = 'faq';
	    return View::make('frontend.pages.faq')->with($data);
	}
}
