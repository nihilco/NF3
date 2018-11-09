<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateTaggablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taggables', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('tag_id');
	    $table->unsignedInteger('taggable_id');
	    $table->string('taggable_type');
	    $table->softDeletes();
            $table->timestamps();

	    $table->foreign('tag_id')
		->references('id')
		->on('tags')
		->onDelete('cascade');

	    //$table->unsignedInteger('creator_id');
	    //$table->unsignedInteger('owner_id');
	    //
	    //$table->foreign('creator_id')
	    //	->references('id')
	    //	->on('users')
	    //	->onDelete('cascade');
	    //
	    //$table->foreign('owner_id')
	    //	->references('id')
	    //	->on('users')
	    //	->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	Schema::dropIfExists('taggables');
    }
}
