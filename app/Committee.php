<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    protected $table = 'committees';

    public function committeeMembers(){
    	return $this->hasMany('App\CommitteeMember','committee_id','id');
    }
}
