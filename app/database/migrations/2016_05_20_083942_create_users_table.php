<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('session_id')->nullable();
            $table->string('email', 256)->nullable();
            $table->string('password', 256)->nullable();
            $table->string('username', 256)->nullable();
            $table->string('phone', 256)->nullable();
            $table->string('address', 256)->nullable();
            $table->string('avatar', 256)->nullable();
            $table->string('fullname', 256)->nullable();
            $table->integer('type')->nullable();
            $table->integer('status')->nullable();
            $table->integer('notify')->nullable();
            $table->string('remember_token', 256)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('users');
    }

}
