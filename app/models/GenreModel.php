<?php
class GenreModel extends Eloquent {
	protected $table = 'dtb_genre';
	
	/**
	 * function listAll
	 * @return unknown
	 */
	public static function listAll() {
		$genres = GenreModel::orderBy('name', 'asc')->where('del_flag', DEL_FLAG_FALSE)->get();
		return $genres;
	}
	
	/**
	 * function get detail information by friendly name
	 * @param unknown $friendly_name
	 * @return unknown
	 */
	public static function detailByfriendlyName($friendly_name) {
		$genre = GenreModel::where("friendly_name", $friendly_name)->where('del_flag', DEL_FLAG_FALSE)->firstOrFail();
		return $genre;
	}
}