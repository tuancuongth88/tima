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
	protected $table ='bk_faq';
protected $fillable = array('category_id,name,description');
protected $dates = ['deleted_at'];

}