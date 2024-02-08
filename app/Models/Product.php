<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int $product_id
 * @property int $price
 * @property string $category
 * @property string $nego_status
 * @property int $seller_id
 * @property string $availability
 * @property string $product_photo
 * @property string $product_condition
 * @property string $brand
 * @property string $meterial
 * @property string $color
 * @property string $size_fit
 * @property string $notes
 *
 * @package App\Models
 */
class Product extends Model
{
	use Sortable;
	protected $table = 'product';
	protected $primaryKey = 'product_id';
	public $timestamps = false;
	public $sortable = ['name', 'price', 'nego_status', 'category', 'product_photo'];

	protected $casts = [
		'price' => 'int',
		'seller_id' => 'int'
	];

	protected $fillable = [
		'price',
		'category',
		'nego_status',
		'seller_id',
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
