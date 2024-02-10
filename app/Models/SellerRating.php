<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SellerRating
 * 
 * @property int $rating_id
 * @property int $order_id
 * @property int $seller_id
 * @property int $shopper_id
 * @property int $rate
 * @property string $comment
 *
 * @package App\Models
 */
class SellerRating extends Model
{
	protected $table = 'seller_rating';
	protected $primaryKey = 'rating_id';
	public $timestamps = false;

	protected $casts = [
		'order_id' => 'int',
		'seller_id' => 'int',
		'shopper_id' => 'int',
		'rate' => 'int'
	];

	protected $fillable = [
		'order_id',
		'seller_id',
		'shopper_id',
		'rate',
		'comment'
	];
}
