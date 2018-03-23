<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class UserServicePermission extends Eloquent {

	use SoftDeletes;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table ='bk_user_service_permission';
protected $fillable = array('userid_id,created_time');
    protected $dates = ['deleted_at'];

}



