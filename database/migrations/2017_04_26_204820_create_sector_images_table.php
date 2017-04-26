<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectorImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sector_images', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('sector_id')->unsigned()->index();
            $table->foreign('sector_id')->references('id')
                    ->on('sectors')->onDelete('cascade');
                    
            $table->integer('image_id')->unsigned()->index();
            $table->foreign('image_id')->references('id')
                    ->on('images')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sector_images');
    }
}
