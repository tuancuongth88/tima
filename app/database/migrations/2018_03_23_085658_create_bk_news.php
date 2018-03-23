<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBkNews extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::create('bk_news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('description', 256)->nullable();
            $table->string('short_descripton', 256)->nullable();
            $table->string('image_url', 256)->nullable();
            $table->integer('user_id', 256)->nullable();
            $table->integer('status')->nullable();
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
		//
		 Schema::drop('bk_news');
	}

}
