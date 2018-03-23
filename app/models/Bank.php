<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Bank extends Eloquent {

	use SoftDeletes;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table ='bk_banks';
protected $fillable = array('name,code');
protected $dates = ['deleted_at'];

}