<?php

use Illuminate\Database\Seeder;
use App\Image;
use App\NewsImage;
use App\SectorImage;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
	        ['image_title'=>'\img\images\news1.jpg'],
	        ['image_title'=>'\img\images\news2.jpg'],
	        ['image_title'=>'\img\images\news3.jpg'],
	        ['image_title'=>'\img\SectorImages\image1.jpg'],
	        ['image_title'=>'\img\SectorImages\image2.jpg'],
	        ['image_title'=>'\img\SectorImages\image3.jpg']
        ];

        $newsImages = [
	        ['news_id'=>1, 'image_id'=>1],
	        ['news_id'=>2, 'image_id'=>2],
	        ['news_id'=>3, 'image_id'=>3]
        ];

        $sectorImages = [
	        ['sector_id'=>1, 'image_id'=>4],
	        ['sector_id'=>2, 'image_id'=>5],
	        ['sector_id'=>3, 'image_id'=>6]
        ];

        foreach ($images as $image) {
        	Image::create($image);
        }

        foreach ($newsImages as $image) {
        	NewsImage::create($image);
        }

        foreach ($sectorImages as $image) {
        	SectorImage::create($image);
        }
    }
}
