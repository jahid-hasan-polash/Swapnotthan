<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommitteeMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('committee_members', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('committee_id')->unsigned()->index();
            $table->foreign('committee_id')->references('id')
                    ->on('committees')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('designation_id')->unsigned()->index();
            $table->foreign('designation_id')->references('id')
                    ->on('designations')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')
                    ->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('committee_members');
    }
}
