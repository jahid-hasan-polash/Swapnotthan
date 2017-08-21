<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    protected $fillable = ['name'];

    public function roleUser(){
    	return $this->hasMany('App\RoleUser','role_id','id');
    }
}
