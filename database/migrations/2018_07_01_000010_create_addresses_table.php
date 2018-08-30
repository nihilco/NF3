<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('name_id');
	    $table->string('address1');
	    $table->string('address2')->nullable();
	    $table->string('address3')->nullable();
	    $table->unsignedInteger('city_id');
	    $table->unsignedInteger('province_id');
	    $table->string('postal_code');
	    $table->unsignedInteger('country_id');
	    $table->softDeletes();
            $table->timestamps();

	    $table->foreign('name_id')
		->references('id')
		->on('provinces')
		->onDelete('cascade');

	    $table->foreign('city_id')
		->references('id')
		->on('provinces')
		->onDelete('cascade');

	    $table->foreign('province_id')
		->references('id')
		->on('provinces')
		->onDelete('cascade');

	    $table->foreign('country_id')
		->references('id')
		->on('countries')
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
        Schema::dropIfExists('addresses');
    }
}
