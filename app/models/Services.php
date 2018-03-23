<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Services extends Eloquent {

	use SoftDeletes;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table ='bk_services';
protected $fillable = array('service_code,service_name,status,image_url');
    protected $dates = ['deleted_at'];

}

