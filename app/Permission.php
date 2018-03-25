<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function roles(){

    	returns $this->belongToMany('Laravel\Role');
    }
}
