<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mybag
 * 
 * @property int $bag_id
 * @property int $shopper_id
 * @property int $seller_id
 * @property int $product_id
 *
 * @package App\Models
 */
class Mybag extends Model
{
	protected $table = 'mybag';
	protected $primaryKey = 'bag_id';
	public $timestamps = false;

	protected $casts = [
		'shopper_id' => 'int',
		'seller_id' => 'int',
		'product_id' => 'int'
	];

	protected $fillable = [
		'shopper_id',
		'seller_id',
		'product_id'
	];
}
