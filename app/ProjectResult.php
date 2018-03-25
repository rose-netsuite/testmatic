<?php


namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class ProjectResultController extends Model
{
	public function components(){
		return $this->belongsTo('Laravel\ProjectComponent');
	}

	public function users(){
		return $this->belongsTo('Laravel\User');
	}
        
}
