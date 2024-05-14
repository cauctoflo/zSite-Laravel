<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BotLevel
 * 
 * @property string $id
 * @property string $member
 * @property string $level
 * @property string $xp
 * @property string $message-perm
 * @property string $message-month
 * @property string $vocal-perm
 * @property string $vocal-month
 *
 * @package App\Models
 */
class BotLevel extends Model
{
	protected $table = 'bot_level';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'id',
		'member',
		'level',
		'xp',
		'message-perm',
		'message-month',
		'vocal-perm',
		'vocal-month'
	];
}
