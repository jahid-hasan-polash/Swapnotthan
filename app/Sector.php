<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    public function sectorImage(){
        return $this->hasMany('App\SectorImage','sector_id','id');
    }
}
