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
	    $table->bigInteger('pending')->default(0);
	    $table->bigInteger('wallet')->default(0);
	    $table->bigInteger('bank')->default(0);
	    $table->bigInteger('points')->default(0);
	    $table->bigInteger('cayman')->default(0);
	    $table->bigInteger('vault')->default(0);
	    $table->bigInteger('piggybank')->default(0);
	    $table->bigInteger('items')->default(0);
	    $table->bigInteger('displaycase')->default(0);
	    $table->bigInteger('bazaar')->default(0);
	    $table->bigInteger('properties')->default(0);
	    $table->bigInteger('stockmarket')->default(0);
	    $table->bigInteger('auctionhouse')->default(0);
	    $table->bigInteger('company')->default(0);
	    $table->bigInteger('bookie')->default(0);
	    $table->bigInteger('loan')->default(0);
	    $table->bigInteger('unpaidfees')->default(0);
	    $table->bigInteger('total')->default(0);
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
