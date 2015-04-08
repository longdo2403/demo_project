<?php
class GenreModel extends Eloquent {
	protected $table = 'dtb_genre';
	
	public static function listAll() {
		$genres = GenreModel::orderBy('name', 'asc')->get();
		return $genres;
	}
	
	public static function detailByfriendlyName($friendly_name) {
		$genre = GenreModel::where("friendly_name", "=", $friendly_name)->firstOrFail();
		return $genre;
	}
}