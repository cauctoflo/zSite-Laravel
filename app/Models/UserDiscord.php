<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserDiscord
 * 
 * @property int $id
 * @property string $username
 * @property string $discord_id
 * @property string $email
 * @property bool $verified
 * @property string $avatar
 * @property string $language
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class UserDiscord extends Model
{
	protected $table = 'user_discords';

	protected $casts = [
		'verified' => 'bool'
	];

	protected $fillable = [
		'username',
		'discord_id',
		'email',
		'verified',
		'avatar',
		'language'
	];
}
