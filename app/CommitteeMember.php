<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommitteeMember extends Model
{
    protected $table = 'committee_members';

    public function committee(){
		    return $this->belongsTo('App\Committee', 'committee_id', 'id');
		}

	public function designation(){
		return $this->belongsTo('App\Designation','designation_id','id');
	}

	public function user(){
		return $this->belongsTo('App\User','user_id','id');
	}
}
