<?php
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Redirect;

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
    |    Route::get('/', 'HomeController@showWelcome');
    |
    */
    protected $layout = 'frontend.layouts.master';
    public $data;
    public $per_pg = 4;
    
    /**
     * constructor
     */
    public function __construct() {
        parent::__construct();
        $this->data['listGenre'] = GenreModel::listAll();
        $this->data['listPopular'] = MovieModel::listPopular();
        $this->data['listNewlyAdded'] = MovieModel::listNewlyAdded();
    }

    /**
     * Make Homepage
     */
    public function homepage() {
        $this->data['title'] = 'Home Page';
        $this->data['track'] = 'homepage';
        //$this->data['listGenre'] = GenreModel::listAll();
        return View::make('frontend.pages.homepage')->with($this->data);
    }
    
    /**
     * Make On Going page
     */
    public function onGoing() {
        $this->data['title'] = 'On Going';
        $this->data['track'] = 'on-going';
        return View::make('frontend.pages.ongoing')->with($this->data);
    }
    
    /**
     * Make Series page
     */
    public function series($friendly_title) {
        try {
            $objMovie = MovieModel::detailMovie($friendly_title);
        } catch (ModelNotFoundException $e) {
            return App::abort(404);
        }
        $this->data['title'] = $objMovie->title . ' | Series';
        $this->data['track'] = 'homepage';
        $this->data['arrCast'] = CastModel::listAll()->toArray();
        $this->data['arrGenres'] = GenreModel::listAll()->toArray();
        $this->data['str_casts'] = FrontHelper::generateCastString($objMovie->cast_ids, $this->data['arrCast']);
        $this->data['str_genres'] = FrontHelper::generateGenresString($objMovie->genre_ids, $this->data['arrGenres'], true) ;
        $this->data['objMovie'] = $objMovie;
        $this->data['listRelativeMovie'] = MovieModel::listRelativeMovie($objMovie->id, $objMovie->type_id, $objMovie->genre_ids);
        $this->data['listEpisode'] = EpisodeModel::listAll($objMovie->id);
        return View::make('frontend.pages.series')->with($this->data);
    }
    
    /**
     * Make watch page
     */
    public function watch($friendly_title, $episode_id) {
        try {
            $objMovie = MovieModel::detailMovie($friendly_title);
        } catch (ModelNotFoundException $e) {
            return App::abort(404);
        }
        $parts = PartModel::listAllPart($objMovie->id, $episode_id);
        
        if ($parts->isEmpty()) {
            return App::abort(404);
        }
        
        $this->data['title'] = 'Watching: ' . $objMovie->title;
        $this->data['track'] = 'homepage';
        $this->data['objMovie'] = $objMovie;
        $this->data['current_ep'] = $episode_id;
        $this->data['listEpisode'] = EpisodeModel::listAll($objMovie->id);
        $this->data['listParts'] = PartModel::listAllPart($objMovie->id, $episode_id);
        return View::make('frontend.pages.watch')->with($this->data);
    }
    
    /**
     * Make about page
     */
    public function about() {
        $this->data['title'] = 'About';
        $this->data['track'] = 'about';
        return View::make('frontend.pages.about')->with($this->data);
    }
    
    /**
     * Make contact page
     */
    public function contact() {
        $this->data['title'] = 'Contact';
        $this->data['track'] = 'contact';
        return View::make('frontend.pages.contact')->with($this->data);
    }
    
    /**
     * Make FAQ page
     */
    public function faq() {
        $this->data['title'] = 'FAQ';
        $this->data['track'] = 'faq';
        return View::make('frontend.pages.faq')->with($this->data);
    }
    
    /**
     * Make get list of movie by Genre
     * @param unknown $friendly_name
     */
    public function listByGenre($friendly_name) {
        //var_dump($friendly_name);
        if ($friendly_name == 'all') {
            $this->data['title'] = 'All Genres';
            $this->data['listByGenre'] = MovieModel::listAllMovie($this->per_pg);
            //var_dump($this->data['listByGenre'][0]['relations']['status']->name);die();
        } else {
            $value = GenreModel::detailByfriendlyName($friendly_name);
            $this->data['title'] = $value->name;
            $genre_id = $value->id;
            $this->data['listByGenre'] = MovieModel::listByGenre($genre_id, $this->per_pg);
        }
        $this->data['arrCast'] = CastModel::listAll()->toArray();
        $this->data['arrGenres'] = GenreModel::listAll()->toArray();
        $this->data['track'] = $friendly_name;
        return View::make('frontend.pages.movie_by_genre')->with($this->data);
    }
    
}
