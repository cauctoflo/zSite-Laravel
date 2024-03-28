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
 * @property string $type
 * @property string $message
 * @property string $channel
 * @property string $role
 *
 * @package App\Models
 */
class ModuleAccueil extends Model
{
	protected $table = 'module_accueil';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'id',
		'module',
		'type',
		'message',
		'channel',
		'role'
	];
}
