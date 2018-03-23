<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class FeeDiscountConfig extends Eloquent {

	use SoftDeletes;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table ='bk_fee_discount_config';
protected $fillable = array('service_id,service_code,discount_percent,validate_time,expried_time,created_by,created_time,status');
protected $dates = ['deleted_at'];

}