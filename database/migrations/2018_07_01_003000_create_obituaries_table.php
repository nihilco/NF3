<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateObituariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obituaries', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('country_id');
	    $table->unsignedInteger('province_id');
	    $table->unsignedInteger('city_id');
	    $table->unsignedInteger('name_id');
	    $table->text('description');
	    $table->text('obituary');
	    $table->string('reference')->nullable();
	    $table->date('born_at');
	    $table->date('death_at');
	    $table->boolean('broadcast')->default(false);
	    $table->softDeletes();
            $table->timestamps();

	    $table->foreign('country_id')
		->references('id')
		->on('countries')
		->onDelete('cascade');

	    $table->foreign('province_id')
		->references('id')
		->on('provinces')
		->onDelete('cascade');

	    $table->foreign('city_id')
		->references('id')
		->on('cities')
		->onDelete('cascade');
		
	    $table->foreign('name_id')
		->references('id')
		->on('names')
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
        Schema::dropIfExists('obituaries');
    }
}
