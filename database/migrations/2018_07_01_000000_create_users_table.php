<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
	    $table->string('username', 100)->unique();
            $table->string('name');
            $table->string('email', 150)->unique();
            $table->string('password');
	    $table->date('dob_at');
	    $table->datetime('accepted_tos_at')->nullable();
	    $table->string('api_key', 128)->unique();
	    $table->boolean('active')->default(false);
            $table->rememberToken();
	    $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
