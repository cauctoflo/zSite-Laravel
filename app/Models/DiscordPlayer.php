<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DiscordPlayer
 * 
 * @property string $member
 * @property string|null $rank
 * @property float $money
 * @property string $level
 *
 * @package App\Models
 */
class DiscordPlayer extends Model
{
	protected $table = 'discord_players';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'money' => 'float'
	];

	protected $fillable = [
		'member',
		'rank',
		'money',
		'level'
	];
}
