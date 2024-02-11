<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderStatus
 * 
 * @property int $os_id
 * @property int $order_id
 * @property Carbon $date_time
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
		'order_id' => 'int',
		'date_time' => 'datetime'
	];

	protected $fillable = [
		'order_id',
		'date_time',
		'status'
	];
}
