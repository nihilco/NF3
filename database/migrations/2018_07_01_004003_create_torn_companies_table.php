<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateTornCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('torn_companies', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('torn_id');
	    $table->unsignedInteger('director_player_id')->nullable();
	    $table->enum('type', [
	        'Fitness Center',
	        'Gents Strip Club',
		'Hair Salon',
	        'Ladies Strip Club',
		'Oil Rig',
		'Sweet Shop',
		'TV Company',
	    ]);
	    $table->string('name');
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
        Schema::dropIfExists('torn_companies');
    }
}
