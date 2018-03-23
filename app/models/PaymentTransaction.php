<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentTransaction extends Eloquent {

	use SoftDeletes;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table ='bk_payment_transaction';
protected $fillable = array('userid,amount,payment_type,created_time,bankname,bankcode');
protected $dates = ['deleted_at'];

}