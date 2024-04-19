<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BackupBump
 * 
 * @property string $id
 * @property string $member
 * @property Carbon $date
 *
 * @package App\Models
 */
class BackupBump extends Model
{
	protected $table = 'backup_bump';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'date' => 'datetime'
	];

	protected $fillable = [
		'id',
		'member',
		'date'
	];
}
