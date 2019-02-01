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
	    $table->unsignedInteger('contact_id')->nullable();
	    $table->string('username', 100)->unique()->nullable();
            $table->string('email', 150)->unique();
	    $table->string('slug')->unique()->nullable();
	    $table->string('avatar')->default('avatar.png');
            $table->string('password')->nullable();
	    $table->date('dob_at')->nullable();
	    $table->datetime('accepted_tos_at')->nullable();
	    $table->datetime('last_login_at')->nullable();
	    $table->datetime('email_confirmed_at')->nullable();
	    $table->unsignedInteger('login_attempts')->nullable();
	    $table->string('api_key', 60)->unique()->nullable();
	    $table->boolean('active')->nullable();
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
