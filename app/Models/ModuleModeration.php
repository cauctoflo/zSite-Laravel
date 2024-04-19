<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ModuleModeration
 * 
 * @property string $id
 * @property string $module
 * @property bool $toggle
 * @property string $channel
 * @property string $blocked
 *
 * @package App\Models
 */
class ModuleModeration extends Model
{
	protected $table = 'module_moderation';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'toggle' => 'bool'
	];

	protected $fillable = [
		'id',
		'module',
		'toggle',
		'channel',
		'blocked'
	];
}
