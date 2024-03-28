<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BotDashboard
 * 
 * @property string $name
 * @property string $description
 * @property Carbon $date
 * @property string $access
 * @property bool $beta
 * @property bool $new
 * @property string $category
 *
 * @package App\Models
 */
class BotDashboard extends Model
{
	protected $table = 'bot_dashboard';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'date' => 'datetime',
		'beta' => 'bool',
		'new' => 'bool'
	];

	protected $fillable = [
		'name',
		'description',
		'date',
		'access',
		'beta',
		'new',
		'category'
	];
}
