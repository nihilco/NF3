<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateTornChainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('torn_chains', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('torn_id');	    
	    $table->unsignedInteger('faction_id');
	    $table->unsignedInteger('links')->nullable();
	    $table->unsignedInteger('respect')->nullable();
	    $table->unsignedInteger('players_count')->nullable();
	    $table->unsignedInteger('attacks_count')->nullable();
	    $table->datetime('started_at')->nullable();
	    $table->datetime('ended_at')->nullable();
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
        Schema::dropIfExists('torn_chains');
    }
}
