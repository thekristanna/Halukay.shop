<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LikeProduct
 * 
 * @property int $like_id
 * @property int $product_id
 * @property int $shopper_id
 * @property int $seller_id
 *
 * @package App\Models
 */
class LikeProduct extends Model
{
	protected $table = 'like_products';
	protected $primaryKey = 'like_id';
	public $timestamps = false;

	protected $casts = [
		'product_id' => 'int',
		'shopper_id' => 'int',
		'seller_id' => 'int'
	];

	protected $fillable = [
		'product_id',
		'shopper_id',
		'seller_id'
	];
}
