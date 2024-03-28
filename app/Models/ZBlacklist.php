<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ZBlacklist
 * 
 * @property string $date
 * @property string $member
 * @property string $type
 * @property string $raison
 * @property string $temps
 *
 * @package App\Models
 */
class ZBlacklist extends Model
{
	protected $table = 'z_blacklist';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'date',
		'member',
		'type',
		'raison',
		'temps'
	];
}
