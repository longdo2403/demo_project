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
	protected $layout = 'frontend.layouts.master';
	public $data;
	
	public function __construct() {
		parent::__construct();
		$this->data['listGenre'] = GenreModel::listAll();
		
	}

	public function homepage() {
	    $this->data['title'] = 'Home Page';
	    $this->data['track'] = 'homepage';
	    //$this->data['listGenre'] = GenreModel::listAll();
		return View::make('frontend.pages.homepage')->with($this->data);
	}
	
	public function onGoing() {
	    $this->data['title'] = 'On Going';
	    $this->data['track'] = 'on-going';
	    return View::make('frontend.pages.ongoing')->with($this->data);
	}
	
	public function series() {
	    $this->data['title'] = 'Bouty Lady 123';
	    $this->data['track'] = 'series';
	    return View::make('frontend.pages.series')->with($this->data);
	}
	
	public function watch() {
	    $this->data['title'] = 'Watching Bouty Lady 123';
	    $this->data['track'] = 'watch';
	    return View::make('frontend.pages.watch')->with($this->data);
	}
	
	public function about() {
	    $this->data['title'] = 'About';
	    $this->data['track'] = 'about';
	    return View::make('frontend.pages.about')->with($this->data);
	}
	
	public function contact() {
	    $this->data['title'] = 'Contact';
	    $this->data['track'] = 'contact';
	    return View::make('frontend.pages.contact')->with($this->data);
	}
	
	public function faq() {
	    $this->data['title'] = 'FAQ';
	    $this->data['track'] = 'faq';
	    return View::make('frontend.pages.faq')->with($this->data);
	}
	
	public function listByGenre($friendly_name) {
		//var_dump($friendly_name);
		if ($friendly_name == 'all') {
			$this->data['title'] = 'All Genres';
		} else {
			$value = GenreModel::detailByfriendlyName($friendly_name);
			$this->data['title'] = $value->name;
		}
		
		$this->data['track'] = $friendly_name;
		return View::make('frontend.pages.movie_by_genre')->with($this->data);
	}
	
}
