<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateTornFactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('torn_factions', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('torn_id');
    	    $table->unsignedInteger('leader_player_id')->nullable();
	    $table->unsignedInteger('coleader_player_id')->nullable();
	    $table->string('name')->nullable();
	    $table->integer('respect')->nullable();
	    $table->unsignedInteger('players_count')->nullable();
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
        Schema::dropIfExists('torn_factions');
    }
}
