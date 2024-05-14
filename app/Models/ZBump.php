<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ZBump
 * 
 * @property string $id
 * @property string $member
 * @property string $invite
 * @property string $description
 * @property string $tag
 * @property Carbon $date
 *
 * @package App\Models
 */
class ZBump extends Model
{
	protected $table = 'z_bump';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'date' => 'datetime'
	];

	protected $fillable = [
		'id',
		'member',
		'invite',
		'description',
		'tag',
		'date'
	];
}
