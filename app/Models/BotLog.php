<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BotLog
 * 
 * @property Carbon $date
 * @property string $id
 * @property string $member
 * @property string $raison
 * @property string $log
 * @property string $log-id
 *
 * @package App\Models
 */
class BotLog extends Model
{
	protected $table = 'bot_logs';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'date' => 'datetime'
	];

	protected $fillable = [
		'date',
		'id',
		'member',
		'raison',
		'log',
		'log-id'
	];
}
