<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ModuleAccueil
 * 
 * @property string $id
 * @property string $module
 * @property bool $toggle
 * @property string $type
 * @property string $message
 * @property string $channel
 * @property string $role
 * @property string $log
 *
 * @package App\Models
 */
class ModuleAccueil extends Model
{
	protected $table = 'module_accueil';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'toggle' => 'bool'
	];

	protected $fillable = [
		'id',
		'module',
		'toggle',
		'type',
		'message',
		'channel',
		'role',
		'log'
	];
}
