<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websites', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('account_id')->nullable();
	    $table->unsignedInteger('domain_id');
	    $table->string('hostname');
	    $table->string('name')->nullable();
	    $table->string('analytics_code')->nullable();
	    $table->boolean('under_construction')->default(true)->nullable();
	    $table->boolean('active')->default(false)->nullable();
	    $table->softDeletes();
            $table->timestamps();

	    $table->foreign('account_id')
		->references('id')
		->on('accounts')
		->onDelete('cascade');
		
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
        Schema::dropIfExists('websites');
    }
}
