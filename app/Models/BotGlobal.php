<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BotGlobal
 * 
 * @property string $type
 * @property string $boolean
 * @property string|null $raison
 *
 * @package App\Models
 */
class BotGlobal extends Model
{
	protected $table = 'bot_global';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'type',
		'boolean',
		'raison'
	];
}
