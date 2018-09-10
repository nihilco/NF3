<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('parent_id')->nullable();
	    $table->string('subject');
	    $table->string('slug');
	    $table->text('content');
	    $table->unsignedInteger('assignee_id')->nullable();
	    $table->unsignedInteger('type_id');
	    $table->unsignedInteger('status_type_id');
	    $table->unsignedInteger('priority_type_id');
	    $table->unsignedInteger('resolution_type_id');
	    $table->unsignedInteger('estimated_time')->nullable();
	    $table->unsignedInteger('actual_time')->nullable();
	    $table->datetime('due_at')->nullable();
	    $table->unsignedInteger('replies_count')->default(0);
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
        Schema::dropIfExists('tickets');
    }
}
