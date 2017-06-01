<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectorImage extends Model
{
    protected $table = 'sector_images';

    public function image(){
		return $this->belongsTo('App\Image','image_id','id');
	}

	public function sector(){
		return $this->belongsTo('App\Sector','sector_id','id');
	}
}
