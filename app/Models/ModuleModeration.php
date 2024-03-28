<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ModuleModeration
 * 
 * @property int $id
 * @property string $module
 * @property int $toggle
 *
 * @package App\Models
 */
class ModuleModeration extends Model
{
	protected $table = 'module_moderation';
	public $timestamps = false;

	protected $casts = [
		'toggle' => 'int'
	];

	protected $fillable = [
		'module',
		'toggle'
	];
}
