<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DiscordPlayer
 * 
 * @property string $member
 * @property string|null $rank
 * @property float $tokens
 * @property string $subtier
 * @property Carbon|null $subtime
 *
 * @package App\Models
 */
class DiscordPlayer extends Model
{
	protected $table = 'discord_players';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tokens' => 'float',
		'subtime' => 'datetime'
	];

	protected $fillable = [
		'member',
		'rank',
		'tokens',
		'subtier',
		'subtime'
	];
}
