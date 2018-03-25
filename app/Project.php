<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $created_full_name = '';
    protected $modified_full_name = '';
    protected $duration;
    protected $is_valid_for_testing = true;

     public $timestamps = false;

    private function getDuration(){

    	$components = TemplateComponent::select('time_limit')
    										->where('template_id', $this->id)
    										->where('type', 'Scenario')
    										->get();


    	foreach($components as $component){
    		$this->duration += $component->time_limit;
    	}

    }

    public function users()
    {
        return $this->belongsToMany('Laravel\User');
    }

    public function components()
    {
        return $this->hasMany('Laravel\ProjectComponent')->orderBy('order');
    }

}
