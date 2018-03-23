<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Eloquent {

	use SoftDeletes;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table ='bk_news';
protected $fillable = array('name,description,short_description,image_url,create_at,user_id,publich_at');
protected $dates = ['deleted_at'];

}