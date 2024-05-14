<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DiscordGlobal
 * 
 * @property string $id
 * @property string $langue
 * @property string $invite
 * @property string $channel
 * @property string|null $rank
 * @property string|null $rank2
 * @property Carbon $date
 * @property string $points
 *
 * @package App\Models
 */
class DiscordGlobal extends Model
{
	protected $table = 'discord_global';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'date' => 'datetime'
	];

	protected $fillable = [
		'id',
		'langue',
		'invite',
		'channel',
		'rank',
		'rank2',
		'date',
		'points'
	];
}
