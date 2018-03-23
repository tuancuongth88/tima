
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionHistory extends Eloquent {

	use SoftDeletes;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table ='bk_transaction_history';
protected $fillable = array('trans_id,service_code,customer_name,customer_mobile,user_id,provice_id,district_id,amount,amount_day,payment_day,status,created_time,telesale_id,telesale_time,saler_id,saler_time,fee,fee_type,percent_discount');
    protected $dates = ['deleted_at'];

}
