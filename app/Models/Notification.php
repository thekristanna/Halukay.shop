<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Notification
 * 
 * @property int $notif_id
 * @property int $content
 * @property int $date_sent
 * @property int $marked_seen
 * @property int $user_id
 *
 * @package App\Models
 */
class Notification extends Model
{
	protected $table = 'notifications';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'notif_id' => 'int',
		'content' => 'int',
		'date_sent' => 'int',
		'marked_seen' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'notif_id',
		'content',
		'date_sent',
		'marked_seen',
		'user_id'
	];
}
