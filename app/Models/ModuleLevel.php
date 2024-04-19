<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ModuleLevel
 * 
 * @property string $id
 * @property bool $toggle
 * @property string $channel
 * @property string $channelnoxp
 * @property string $rolenoxp
 *
 * @package App\Models
 */
class ModuleLevel extends Model
{
	protected $table = 'module_level';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'toggle' => 'bool'
	];

	protected $fillable = [
		'id',
		'toggle',
		'channel',
		'channelnoxp',
		'rolenoxp'
	];
}
