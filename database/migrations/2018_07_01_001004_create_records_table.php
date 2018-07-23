<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('zone_id');
	    $table->string('name', 253);
	    $table->unsignedInteger('ttl')->nullable();
	    $table->enum('type', ['NS', 'MX', 'A', 'AAAA', 'TXT']);
	    $table->unsignedInteger('priority')->nullable();
	    $table->text('data');
	    $table->softDeletes();
            $table->timestamps();

	    $table->foreign('zone_id')
		->references('id')
		->on('zones')
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
        Schema::dropIfExists('records');
    }
}
