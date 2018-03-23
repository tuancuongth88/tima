<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class CategoriesFaq extends Eloquent {

	use SoftDeletes;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table ='bk_service_amount_detail';
protected $fillable = array('amount_name,amount,service_id,amount_type,status');
protected $dates = ['deleted_at'];

}