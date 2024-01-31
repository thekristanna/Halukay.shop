<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * 
 * @property int $order_id
 * @property string $collect_op
 * @property string $payment
 * @property int $seller_id
 * @property int $shopper_id
 * @property string $status_seller
 * @property string $status_shopper
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'orders';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'order_id' => 'int',
		'seller_id' => 'int',
		'shopper_id' => 'int'
	];

	protected $fillable = [
		'order_id',
		'collect_op',
		'payment',
		'seller_id',
		'shopper_id',
		'status_seller',
		'status_shopper'
	];
}
