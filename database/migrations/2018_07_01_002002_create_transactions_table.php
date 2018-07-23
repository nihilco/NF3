<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('account_id');
	    $table->unsignedInteger('customer_id');
	    $table->unsignedInteger('invoice_id');
	    $table->enum('type', ['payment', 'donation', 'refund']);
	    $table->integer('total');
	    $table->text('notes')->nullable();
            $table->timestamps();
	    $table->softDeletes();

	    $table->foreign('account_id')
		->references('id')
		->on('accounts')
		->onDelete('cascade');

	    $table->foreign('customer_id')
		->references('id')
		->on('customers')
		->onDelete('cascade');

	    $table->foreign('invoice_id')
	        ->references('id')
		->on('invoices')
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
        Schema::dropIfExists('transactions');
    }
}
