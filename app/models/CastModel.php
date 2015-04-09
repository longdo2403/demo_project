<?php
class CastModel extends Eloquent {
    protected $table = 'dtb_cast';
    
    public static function listAll() {
        $casts = CastModel::all();
        return $casts;
    }
}