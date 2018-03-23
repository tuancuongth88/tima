
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class CategoriesNews extends Eloquent {

	use SoftDeletes;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table ='bk_categories_news';
protected $fillable = array('name');
protected $dates = ['deleted_at'];
}