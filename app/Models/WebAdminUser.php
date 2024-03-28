<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WebAdminUser
 * 
 * @property int $id
 * @property string $user_name
 * @property string $email
 * @property string $password
 * @property string $rank
 * @property string|null $image
 * @property Carbon $created_at
 * @property Carbon $last_login
 *
 * @package App\Models
 */
class WebAdminUser extends Model
{
	protected $table = 'web_admin_users';
	public $timestamps = false;

	protected $casts = [
		'last_login' => 'datetime'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'user_name',
		'email',
		'password',
		'rank',
		'image',
		'last_login'
	];
}
