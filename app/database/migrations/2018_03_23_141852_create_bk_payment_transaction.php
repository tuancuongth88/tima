<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBkPaymentTransaction extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//

		Schema::create('bk_payment_transaction', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->nullable();
			$table->string('amount',256)->nullable();
			$table->string('payment_type',256)->nullable();
			$table->datetime('created_time')->nullable();
			$table->string('bankname',256)->nullable();
			$table->string('bankcode',256)->nullable();
			$table->softDeletes();
			$table->timestamps();
		}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('bk_payment_transaction');
	}

}
