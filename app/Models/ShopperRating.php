<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ShopperRating
 * 
 * @property int $rating_id
 * @property int $order_id
 * @property int $shopper_id
 * @property int $seller_id
 * @property int $rate
 * @property string $comment
 *
 * @package App\Models
 */
class ShopperRating extends Model
{
	protected $table = 'shopper_rating';
	protected $primaryKey = 'rating_id';
	public $timestamps = false;

	protected $casts = [
		'order_id' => 'int',
		'shopper_id' => 'int',
		'seller_id' => 'int',
		'rate' => 'int'
	];

	protected $fillable = [
		'order_id',
		'shopper_id',
		'seller_id',
		'rate',
		'comment'
	];
}
