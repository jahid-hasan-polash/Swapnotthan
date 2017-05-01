<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsImage extends Model
{
    protected $table = 'news_images';

    public function image(){
		return $this->belongsTo('App\Image','image_id','id');
	}

	public function news(){
		return $this->belongsTo('App\News','news_id','id');
	}
}
