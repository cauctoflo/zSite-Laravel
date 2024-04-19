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
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $tag
 * @property bool $premium
 * @property string $title
 * @property string $description
 * @property bool $afficher
 *
 * @package App\Models
 */
class BotDashboard extends Model
{
	protected $table = 'bot_dashboard';

	protected $casts = [
		'premium' => 'bool',
		'afficher' => 'bool'
	];

	protected $fillable = [
		'tag',
		'premium',
		'title',
		'description',
		'afficher'
	];
}
