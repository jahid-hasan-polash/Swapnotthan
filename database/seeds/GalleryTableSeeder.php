<?php

use App\Gallery;
use App\Slider;
use Illuminate\Database\Seeder;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
        ['image_title'=>'road paint','image_link'=>'road paint.jpg'],
        ['image_title'=>'shobdo punorbashon','image_link'=>'punorbashon 3.jpg'],
        ['image_title'=>'Chotomoni nibash','image_link'=>'Chotomoni.jpg'],
        ['image_title'=>'Chotomoni nibash flag Making','image_link'=>'Chotomoni observe.jpg'],
        ['image_title'=>'worm cloth distribution','image_link'=>'worm cloth distribution.jpg'],
        ['image_title'=>'Eid bostro bitoron','image_link'=>'Eid bostro bitoron.jpg'],
        ['image_title'=>'freshers Reception','image_link'=>'freshers Reception.JPG'],
        ['image_title'=>'road painting','image_link'=>'road paint.jpg'],
        ['image_title'=>'Boi mela','image_link'=>'Boi mela (2).JPG'],
        ['image_title'=>'Chotomoni 21st february','image_link'=>'Chotomoni 21st february.jpg'],
        ['image_title'=>'picnic','image_link'=>'picnic lalakhal.jpg'],
        ['image_title'=>'young bangla presentation','image_link'=>'young bangla presents.jpg']
        ];

        $sliderImages = [
        ['image_title'=>'chotomoni nibash','image_link'=>'chotomoni nibash.jpg'],
        ['image_title'=>'ekdin bikele','image_link'=>'ekdin bikele.jpg'],
        ['image_title'=>'Freshers reception 2017','image_link'=>'Freshers reception 2017.jpg'],
        ['image_title'=>'BBQ','image_link'=>'BBQ.JPG']
        ];

        //Seed gallery images
        foreach ($images as $image) {
    		Gallery::create($image);
    	}

    	//seed slider images
    	foreach ($sliderImages as $sliderImage) {
    		Slider::create($sliderImage);
    	}
    }
    
}
