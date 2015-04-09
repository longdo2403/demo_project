<?php
class MovieModel extends eloquent{
    protected $table = 'dtb_movies';
    
    public function status(){
        return $this->hasOne('StatusModel', 'id', 'status');
    }
    
    public static function listPopular() {
        $populars = MovieModel::orderBy('watched', 'desc')->take(12)->get();
        return $populars;
    }
    
    public static function listNewlyAdded() {
        $newly = MovieModel::orderBy('created_at', 'desc')->take(6)->get();
        return $newly;
    }
    
    public static function listAllMovie($per_pg) {
        //$all = MovieModel::paginate($per_pg);
        $all = MovieModel::with('status')->paginate($per_pg);
        return $all;
    }
    
    public static function listByGenre($genre_id, $per_pg) {
        $list = MovieModel::where("genre_ids", "LIKE", "%$genre_id%")->paginate($per_pg);
        return $list;
    }
}