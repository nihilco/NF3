<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateGamePlayerStatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_player_stat', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('player_id');
	    $table->unsignedInteger('stat_id');
	    $table->integer('current');
	    $table->integer('min');
	    $table->integer('max');
	    $table->integer('refresh');
	    $table->unsignedInteger('refresh_rate');
	    $table->enum('refresh_rate_unit', ['seconds', 'minutes', 'hours', 'days']);
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
        Schema::dropIfExists('game_player_stat');
    }
}
