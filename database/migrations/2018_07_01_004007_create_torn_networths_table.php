<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateTornNetworthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('torn_networths', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('player_id');
	    $table->bigInteger('pending')->nullable();
	    $table->bigInteger('wallet')->nullable();
	    $table->bigInteger('bank')->nullable();
	    $table->bigInteger('points')->nullable();
	    $table->bigInteger('cayman')->nullable();
	    $table->bigInteger('vault')->nullable();
	    $table->bigInteger('piggybank')->nullable();
	    $table->bigInteger('items')->nullable();
	    $table->bigInteger('displaycase')->nullable();
	    $table->bigInteger('bazaar')->nullable();
	    $table->bigInteger('properties')->nullable();
	    $table->bigInteger('stockmarket')->nullable();
	    $table->bigInteger('auctionhouse')->nullable();
	    $table->bigInteger('company')->nullable();
	    $table->bigInteger('bookie')->nullable();
	    $table->bigInteger('loan')->nullable();
	    $table->bigInteger('unpaidfees')->nullable();
	    $table->bigInteger('total')->nullable();
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
        Schema::dropIfExists('torn_networths');
    }
}
