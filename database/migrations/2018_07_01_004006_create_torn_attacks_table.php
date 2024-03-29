<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateTornAttacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('torn_attacks', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('torn_id');
	    $table->unsignedInteger('attacker_player_id')->nullable();
	    $table->unsignedInteger('attacker_faction_id')->nullable();
	    $table->unsignedInteger('defender_player_id');
	    $table->unsignedInteger('defender_faction_id')->nullable();
	    $table->enum('result', ['Attacked', 'Mugged', 'Hospitalized', 'Won', 'Lost', 'Stalemate', 'Assist', 'Escape' ,'Timeout', 'Arrested', 'Looted', 'Special']);
	    $table->boolean('stealthed')->nullable();
	    $table->decimal('respect_gain', 12, 5)->nullable();
	    $table->unsignedInteger('chain_link')->nullable();
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
        Schema::dropIfExists('torn_attacks');
    }
}
