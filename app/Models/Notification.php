<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Notification
 * 
 * @property int $notif_id
 * @property string $content
 * @property Carbon $date_sent
 * @property int $marked_seen
 * @property int $user_id
 *
 * @package App\Models
 */
class Notification extends Model
{
	protected $table = 'notifications';
	protected $primaryKey = 'notif_id';
	public $timestamps = false;

	protected $casts = [
		'date_sent' => 'datetime',
		'marked_seen' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'content',
		'date_sent',
		'marked_seen',
		'user_id'
	];
}
