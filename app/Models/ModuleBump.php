<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ModuleBump
 * 
 * @property int $id
 * @property string $member
 * @property string $invite
 * @property string $description
 * @property Carbon $last
 *
 * @package App\Models
 */
class ModuleBump extends Model
{
	protected $table = 'module_bump';
	public $timestamps = false;

	protected $casts = [
		'last' => 'datetime'
	];

	protected $fillable = [
		'member',
		'invite',
		'description',
		'last'
	];
}
