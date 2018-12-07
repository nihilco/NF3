<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateTornItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('torn_items', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('torn_id');
	    $table->string('name');
	    $table->text('description');
	    $table->unsignedBigInteger('buy_price')->nullable();
	    $table->unsignedBigInteger('sell_price')->nullable();
	    $table->unsignedBigInteger('market_value')->nullable();
	    $table->unsignedBigInteger('circulation')->nullable();
	    $table->string('image')->nallable();
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
        Schema::dropIfExists('torn_items');
    }
}
