<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BackupClassement
 * 
 * @property string $type
 * @property string $id
 * @property string $name
 * @property string $description
 * @property string $classement
 * @property string $level
 * @property string $message
 * @property string $vocal
 *
 * @package App\Models
 */
class BackupClassement extends Model
{
	protected $table = 'backup_classement';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'type',
		'id',
		'name',
		'description',
		'classement',
		'level',
		'message',
		'vocal'
	];
}
