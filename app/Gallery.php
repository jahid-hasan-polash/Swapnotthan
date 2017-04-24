<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleryImage';
    protected $fillable = ['image_title','image_link'];
}
