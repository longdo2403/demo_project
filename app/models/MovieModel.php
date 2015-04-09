<?php
class MovieModel extends eloquent{
    protected $table = 'dtb_movies';
    
    /**
     * 
     * @return unknown
     */
    public static function listPopular() {
        $populars = MovieModel::orderBy('watched', 'desc')->take(12)->get();
        return $populars;
    }
    
    /**
     * 
     */
    public static function listNewlyAdded() {
        $newly = MovieModel::orderBy('created_at', 'desc')->take(6)->get();
        return $newly;
    }
}