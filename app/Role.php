<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
   /** public function permissions(){

    	returns $this->belongToMany('Laravel\Permission');
    }

    public function givePermissionTo(Permission $permission){

    	return $this->permissions()->save($permissions);
    }**/

    public function users()
    {
        return $this->belongsToMany('Laravel\User');
    }
}
