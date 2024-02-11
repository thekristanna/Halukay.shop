<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderStatus
 * 
 * @property int $os_id
 * @property int $order_id
 * @property string $status
 *
 * @package App\Models
 */
class OrderStatus extends Model
{
	protected $table = 'order_status';
	protected $primaryKey = 'os_id';
	public $timestamps = false;

	protected $casts = [
		'order_id' => 'int'
	];

	protected $fillable = [
		'order_id',
		'status'
	];
}
