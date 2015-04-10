<?php
class EpisodeModel extends Eloquent{
    protected $table = 'dtb_episodes';
    
    public static function listAll($movie_id) {
        $episodes = EpisodeModel::where('movie_id', $movie_id)->where('del_flag', DEL_FLAG_FALSE)->orderBy('episode_id', 'asc')->get();
        return $episodes;
    }
    
}