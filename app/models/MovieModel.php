<?php
class MovieModel extends eloquent{
    protected $table = 'dtb_movies';
    
    public function status(){
        return $this->hasOne('StatusModel', 'id', 'status');
    }
    
    public function type() {
        return $this->hasOne('TypeModel', 'id', 'type_id');
    }
    
    public function category() {
        return $this->hasOne('CategoryModel', 'id', 'category_id');
    }
    
    public static function listPopular() {
        $populars = MovieModel::orderBy('watched', 'desc')->where('del_flag', DEL_FLAG_FALSE)->take(12)->get();
        return $populars;
    }
    
    public static function listNewlyAdded() {
        $newly = MovieModel::orderBy('created_at', 'desc')->where('del_flag', DEL_FLAG_FALSE)->take(6)->get();
        return $newly;
    }
    
    public static function listAllMovie($per_pg) {
        $all = MovieModel::with('status')->where('del_flag', DEL_FLAG_FALSE)->paginate($per_pg);
        return $all;
    }
    
    public static function listByGenre($genre_id, $per_pg) {
        $list = MovieModel::with(array('status', 'type', 'category'))->where("genre_ids", "LIKE", "%$genre_id%")->where('del_flag', DEL_FLAG_FALSE)->paginate($per_pg);
        return $list;
    }
    
    public static function detailMovie($friendly_title) {
        $movie = MovieModel::with(array('status', 'type', 'category'))->where('friendly_title', "=", $friendly_title)->where('del_flag', DEL_FLAG_FALSE)->firstOrFail();
        return $movie;
    }
    
    public static function listRelativeMovie($id, $type_id, $genre_ids) {
        $arrGenres = explode(',', $genre_ids);
        $list = MovieModel::with(array('status', 'type', 'category'))->where('type_id',"=",$type_id)
                ->where("id", "<>", $id)
                ->Where(function($query) use ($arrGenres){
                    foreach ($arrGenres as $item) {
                        $query->orWhere("genre_ids", "LIKE", "%$item%");
                    }
                })->where('del_flag', DEL_FLAG_FALSE)->take(8)->get();
        return $list;
    }
}