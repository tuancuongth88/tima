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
	protected $table = 'bk_categories_faq';
	protected $fillable = array('name');
    protected $dates = ['deleted_at'];

}