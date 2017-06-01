<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = 'user_details';

    public function user(){
		    return $this->belongsTo('App\User', 'user_id', 'id');
		}

	public function department(){
		return $this->belongsTo('App\Department','department_id','id');
	}

	public function bloodGroup(){
		return $this->belongsTo('App\BloodGroup','bl_group_id','id');
	}

}
