<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('account_id');
	    $table->unsignedInteger('user_id');
	    $table->string('stripe_customer_id');
	    $table->softDeletes();
            $table->timestamps();

	    $table->foreign('account_id')
		->references('id')
		->on('accounts')
		->onDelete('cascade');

	    $table->foreign('user_id')
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
        Schema::dropIfExists('customers');
    }
}
