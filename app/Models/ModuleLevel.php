<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ModuleLevel
 * 
 * @property int $id
 * @property string $type
 * @property int $level
 * @property int $xp
 * @property int $message-perm
 * @property int $message-month
 * @property int $vocal-perm
 * @property int $vocal-month
 *
 * @package App\Models
 */
class ModuleLevel extends Model
{
	protected $table = 'module_level';
	public $timestamps = false;

	protected $casts = [
		'level' => 'int',
		'xp' => 'int',
		'message-perm' => 'int',
		'message-month' => 'int',
		'vocal-perm' => 'int',
		'vocal-month' => 'int'
	];

	protected $fillable = [
		'type',
		'level',
		'xp',
		'message-perm',
		'message-month',
		'vocal-perm',
		'vocal-month'
	];
}
