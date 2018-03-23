<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBkServices extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('bk_services', function (Blueprint $table) {
			$table->increments('id');
			$table->string('service_code',256)->nullable();
			$table->string('service_name',256)->nullable();
			$table->string('status',256)->nullable();
			$table->string('image_url',256)->nullable();
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
		Schema::drop('bk_services');
	}

}
