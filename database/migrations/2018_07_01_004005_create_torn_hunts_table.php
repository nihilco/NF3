<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateTornHuntsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('torn_hunts', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('player_id');
	    $table->enum('type', ['beginner', 'intermediate', 'advanced']);
	    $table->unsignedInteger('award');
	    $table->unsignedInteger('skill');
	    $table->unsignedInteger('animals_killed_count')->default(0);
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
        Schema::dropIfExists('torn_hunts');
    }
}
