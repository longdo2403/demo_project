<?php
class PartModel extends Eloquent{
    protected $table = 'dtb_parts';
    
    public static function listAllPart($movie_id, $episode_id){
        $parts = PartModel::where('movie_id', $movie_id)
                            ->where('episode_id', $episode_id)
                            ->where('del_flag', DEL_FLAG_FALSE)
                            ->orderBy('part_no', 'asc')
                            ->get();
        return $parts;
    }
}