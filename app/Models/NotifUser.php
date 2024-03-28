<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NotifUser
 * 
 * @property int $id
 * @property string $email
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class NotifUser extends Model
{
	protected $table = 'notif_users';

	protected $fillable = [
		'email'
	];
}
