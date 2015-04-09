<?php
class StatusModel extends Eloquent {
    
    protected $table = 'dtb_status';
    
    public function movie(){
        return $this->belongsTo('MovieModel', 'status', 'id');
    }
}