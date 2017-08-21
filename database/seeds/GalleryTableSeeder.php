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
            ['image_title'=>'road paint','image_link'=>'/img/gallery/road_paint.jpg'],
            ['image_title'=>'shobdo punorbashon','image_link'=>'/img/gallery/punorbashon_3.jpg'],
            ['image_title'=>'Chotomoni nibash','image_link'=>'/img/gallery/Chotomoni.jpg'],
            ['image_title'=>'Chotomoni nibash flag Making','image_link'=>'/img/gallery/Chotomoni_observe.jpg'],
            ['image_title'=>'worm cloth distribution','image_link'=>'/img/gallery/worm_cloth_distribution.jpg'],
            ['image_title'=>'Eid bostro bitoron','image_link'=>'/img/gallery/Eid_bostro_bitoron.jpg'],
            ['image_title'=>'freshers Reception','image_link'=>'/img/gallery/freshers_Reception.JPG'],
            ['image_title'=>'bornomala','image_link'=>'/img/gallery/bornomala.jpg'],
            ['image_title'=>'Boi mela','image_link'=>'/img/gallery/Boi_mela_(2).JPG'],
            ['image_title'=>'Chotomoni 21st february','image_link'=>'/img/gallery/Chotomoni_21st_february.jpg'],
            ['image_title'=>'picnic','image_link'=>'/img/gallery/picnic_lalakhal.jpg'],
            ['image_title'=>'young bangla presentation','image_link'=>'/img/gallery/young_bangla_presents.jpg']
        ];

        $sliderImages = [
            ['image_title'=>'chotomoni nibash','image_link'=>'/img/slider/chotomoni_nibash.jpg'],
            ['image_title'=>'ekdin bikele','image_link'=>'/img/slider/ekdin_bikele.jpg'],
            ['image_title'=>'Freshers reception 2017','image_link'=>'/img/slider/Freshers_reception_2017.jpg'],
            ['image_title'=>'BBQ','image_link'=>'/img/slider/BBQ.JPG']
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
