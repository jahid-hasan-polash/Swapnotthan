<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'sliderImage';
    protected $fillable = ['image_title','image_link'];
}
