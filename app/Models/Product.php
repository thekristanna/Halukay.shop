<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int $product_id
 * @property string $name
 * @property int $price
 * @property string $category
 * @property string $nego_status
 * @property int $seller_id
 * @property int $user_id
 * @property string $availability
 * @property string $product_photo
 * @property string $product_condition
 * @property string $brand
 * @property string $material
 * @property string $color
 * @property string $size_fit
 * @property string $notes
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'product';
	protected $primaryKey = 'product_id';
	public $timestamps = false;

	protected $casts = [
		'price' => 'int',
		'seller_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'name',
		'price',
		'category',
		'nego_status',
		'seller_id',
		'user_id',
		'availability',
		'product_photo',
		'product_condition',
		'brand',
		'material',
		'color',
		'size_fit',
		'notes'
	];
}
