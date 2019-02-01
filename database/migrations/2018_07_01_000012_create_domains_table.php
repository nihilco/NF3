<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domains', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('tld_id');
            $table->unsignedInteger('account_id')->nullable();
	    $table->string('domain')->unique();
	    $table->date('registered_at');
	    $table->date('last_renewed_at');
	    $table->date('renews_at');
	    $table->unsignedInteger('websites_count')->default(0)->nullable();
	    $table->boolean('active')->default(false)->nullable();
	    $table->softDeletes();
            $table->timestamps();

	    $table->foreign('account_id')
		->references('id')
		->on('accounts')
		->onDelete('cascade');

	    $table->foreign('tld_id')
		->references('id')
		->on('tlds')
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
        Schema::dropIfExists('domains');
    }
}
