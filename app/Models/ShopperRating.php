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
 * @property int $shopper_id
 * @property int $rate
 * @property string $comm
 *
 * @package App\Models
 */
class ShopperRating extends Model
{
	protected $table = 'shopper_rating';
	protected $primaryKey = 'rating_id';
	public $timestamps = false;

	protected $casts = [
		'shopper_id' => 'int',
		'rate' => 'int'
	];

	protected $fillable = [
		'shopper_id',
		'rate',
		'comm'
	];
}
