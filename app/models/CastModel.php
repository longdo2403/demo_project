<?php
class CastModel extends Eloquent {
    protected $table = 'dtb_cast';
    
    public static function listAll() {
        $casts = CastModel::where('del_flag', DEL_FLAG_FALSE)->get();
        return $casts;
    }
    
    public static function detailByfriendlyName($friendly_name) {
    	$cast = CastModel::where("friendly_name", $friendly_name)->where('del_flag', DEL_FLAG_FALSE)->firstOrFail();
    	return $cast;
    }
}