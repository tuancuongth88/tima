<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class FeeService extends Eloquent {

	use SoftDeletes;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table ='bk_fee_service';
protected $fillable = array('service_id,service_code,fee,created_by,created_time,validate_time,exprice_time,status');
protected $dates = ['deleted_at'];

}