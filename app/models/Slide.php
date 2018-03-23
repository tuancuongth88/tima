<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Slide extends Eloquent {

	use SoftDeletes;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table ='bk_slide';
protected $fillable = array('name,image_url,description,link');
protected $dates = ['deleted_at'];

}

