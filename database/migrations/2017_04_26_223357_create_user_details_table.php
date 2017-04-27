<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')
                    ->on('users')->onDelete('cascade');
                    
            $table->string('mothers_name');
            $table->string('fathers_name');
            $table->string('present_address');
            $table->string('mobile_number');

            $table->integer('department_id')->unsigned()->index();
            $table->foreign('department_id')->references('id')
                    ->on('departments')->onDelete('cascade');

            $table->boolean('bl_donate_capable');

            $table->integer('bl_group_id')->unsigned()->index();
            $table->foreign('bl_group_id')->references('id')
                    ->on('blood_groups')->onDelete('cascade');

            $table->string('ex_curr_activities');
            $table->string('why_to_be_swapnotthanian');
            $table->string('sector_to_work_in');
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
        Schema::drop('user_details');
    }
}
