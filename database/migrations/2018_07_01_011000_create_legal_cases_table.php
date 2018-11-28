<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateLegalCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legal_cases', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('type_id');
	    $table->unsignedInteger('status_type_id');
	    $table->unsignedInteger('plaintiff_contact_id')->nullable();
	    $table->unsignedInteger('defendant_contact_id')->nullable();
	    $table->unsignedInteger('county_id');
	    $table->string('name');
	    $table->text('description')->nullable();
	    $table->datetime('incident_at')->nullable();
	    $table->datetime('settled_at')->nullable();
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
        Schema::dropIfExists('legal_cases');
    }
}
