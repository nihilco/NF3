<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateTornPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('torn_players', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('torn_id');
	    $table->unsignedInteger('faction_id')->nullable();
	    $table->unsignedInteger('company_id')->nullable();
	    $table->string('name')->nullable();
	    $table->string('api_key')->nullable();
	    $table->unsignedInteger('nnb')->nullable();
	    $table->enum('gender', ['male', 'female'])->nullable();
	    $table->unsignedInteger('level')->nullable();
	    $table->unsignedInteger('age')->nullable();
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
        Schema::dropIfExists('torn_players');
    }
}
