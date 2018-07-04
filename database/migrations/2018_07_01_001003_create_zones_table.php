<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateZonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zones', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('domain_id');
	    $table->unsignedInteger('server_id');
	    $table->unsignedInteger('serial');
	    $table->unsignedInteger('refresh')->nullable();
	    $table->unsignedInteger('retry')->nullable();
	    $table->unsignedInteger('expire')->nullable();
	    $table->unsignedInteger('ttl_negative')->nullable();
	    $table->unsignedInteger('ttl_default')->nullable();
	    //$table->boolean('has_modifications')->default(false);
	    $table->boolean('active')->default(false);
	    $table->softDeletes();
            $table->timestamps();

	    $table->foreign('domain_id')
		->references('id')
		->on('domains')
		->onDelete('cascade');

	    $table->foreign('server_id')
		->references('id')
		->on('servers')
		->onDelete('cascade');

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
        Schema::dropIfExists('zones');
    }
}
