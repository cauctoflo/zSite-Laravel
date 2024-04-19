<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DiscordPerm
 * 
 * @property string $id
 * @property string $command
 * @property int $toggle
 * @property string $role
 *
 * @package App\Models
 */
class DiscordPerm extends Model
{
	protected $table = 'discord_perms';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'toggle' => 'int'
	];

	protected $fillable = [
		'id',
		'command',
		'toggle',
		'role'
	];
}
