<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BackupAvi
 * 
 * @property string $id
 * @property string $member
 * @property Carbon $date
 * @property string $note
 * @property string $commentaire
 * @property string $code
 *
 * @package App\Models
 */
class BackupAvi extends Model
{
	protected $table = 'backup_avis';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'date' => 'datetime'
	];

	protected $fillable = [
		'id',
		'member',
		'date',
		'note',
		'commentaire',
		'code'
	];
}
