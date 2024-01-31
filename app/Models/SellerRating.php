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
 * @property int $seller_id
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
		'seller_id' => 'int',
		'rate' => 'int'
	];

	protected $fillable = [
		'seller_id',
		'rate',
		'comment'
	];
}
