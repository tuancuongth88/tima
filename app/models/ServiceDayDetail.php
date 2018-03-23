<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceDayDetail extends Eloquent {

	use SoftDeletes;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table ='bk_service_day_detail';
protected $fillable = array('day_name,day,service_id,day_type,status');
protected $dates = ['deleted_at'];

}