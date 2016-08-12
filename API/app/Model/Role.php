<?php

namespace App\Model;

use App\Model\BasicModel;

class Role extends BasicModel
{
    protected $table = "roles";
    protected $primaryKey = 'role_id';
    protected $fillable = array('role_id', 'role_name', 'role_icon');
}
