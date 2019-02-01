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
	    $table->unsignedInteger('serial')->default(1);
	    $table->unsignedInteger('refresh')->default(172800);
	    $table->unsignedInteger('retry')->default(900);
	    $table->unsignedInteger('expire')->default(1209600);
	    $table->unsignedInteger('ttl')->default(3600);
	    $table->unsignedInteger('records_count')->default(0)->nullable();
	    //$table->boolean('has_modifications')->default(false);
	    $table->boolean('active')->default(false)->nullable();
	    $table->softDeletes();
            $table->timestamps();

	    $table->foreign('domain_id')
		->references('id')
		->on('domains')
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
