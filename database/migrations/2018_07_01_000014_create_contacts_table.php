<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('website_id');
	    $table->unsignedInteger('name_id');
	    $table->unsignedInteger('addreses_count')->nullable();
	    $table->unsignedInteger('organizations_count')->nullable();
	    $table->unsignedInteger('phone_numbers_count')->nullable();
	    $table->date('dob')->nullable();
	    $table->string('tax_number')->nullable();
	    $table->unsignedInteger('tax_number_type_id')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
