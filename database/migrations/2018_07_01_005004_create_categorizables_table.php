<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateCategorizablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorizables', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('category_id');
	    $table->unsignedInteger('categorizable_id');
	    $table->string('categorizable_type');
	    $table->softDeletes();
            $table->timestamps();

	    $table->foreign('category_id')
		->references('id')
		->on('categories')
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
	Schema::dropIfExists('categorizables');
    }
}
