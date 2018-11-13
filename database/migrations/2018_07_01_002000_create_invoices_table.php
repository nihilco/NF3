<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('type_id');
	    $table->unsignedInteger('account_id');
	    $table->unsignedInteger('customer_id');
	    $table->unsignedInteger('billing_contact_id');
	    $table->unsignedInteger('shipping_contact_id');
	    $table->string('slug')->unique();
	    $table->integer('subtotal');
	    $table->integer('tax_rate')->default(0);
	    $table->integer('tax')->default(0);
	    $table->integer('shipping')->default(0);
	    $table->integer('total');
	    $table->text('notes')->nullable();
	    $table->date('opened_at')->nullable();
	    $table->date('due_at');
	    $table->date('paid_at')->nullable();
	    $table->unsignedInteger('status_type_id');
	    $table->unsignedInteger('line_items_count')->default(0);
	    $table->softDeletes();
            $table->timestamps();

	    $table->foreign('account_id')
		->references('id')
		->on('accounts')
		->onDelete('cascade');

	    $table->foreign('customer_id')
		->references('id')
		->on('customers')
		->onDelete('cascade');

	    $table->foreign('billing_contact_id')
		->references('id')
		->on('contacts')
		->onDelete('cascade');

	    $table->foreign('shipping_contact_id')
		->references('id')
		->on('contacts')
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
        Schema::dropIfExists('invoices');
    }
}
