<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateGameActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_activities', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('skill_id');
	    $table->unsignedInteger('skill_rank');
	    $table->string('name');
	    $table->text('description');
	    $table->softDeletes();	    
            $table->timestamps();

	    $table->unsignedInteger('creator_id');
	    $table->unsignedInteger('owner_id');

	    $table->foreign('creator_id')
		->references('id')
		->on('users')
		->onDelete('cascade');

	    $table->foreign('owner_id')
		->references('id')
		->on('users')
		->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_activities');
    }
}
