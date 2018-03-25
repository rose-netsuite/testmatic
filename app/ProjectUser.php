<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class ProjectUser extends Model
{
    protected $table = "project_user";
    const CREATED_AT = 'created_date';
    const UPDATED_AT = 'modified_date';
}
