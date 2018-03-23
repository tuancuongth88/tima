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
		//
		Schema::create('bk_news', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name',256)->nullable();
			$table->string('description',256)->nullable();
			$table->string('short_description',256)->nullable();
			$table->string('image_url',256)->nullable();
			$table->string('create_at',256)->nullable();
			$table->integer('user_id')->nullable();
			$table->date('publich_at')->nullable();
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
