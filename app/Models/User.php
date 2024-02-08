<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email_address
 * @property string $username
 * @property string $display_name
 * @property string $password
 * @property string $phone_number
 * @property string $address_street
 * @property string $address_barangay
 * @property string $address_citytown
 * @property string $address_province
 * @property string $address_zip
 * @property string $role
 * @property string|null $profile_photo
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';
	protected $primaryKey = 'user_id';
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'email_address',
		'username',
		'display_name',
		'password',
		'phone_number',
		'address_street',
		'address_barangay',
		'address_citytown',
		'address_province',
		'address_zip',
		'role',
		'profile_photo'
	];
}
