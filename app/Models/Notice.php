<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Notice
 * 
 * @property int $id
 * @property string $title
 * @property string $ref_file
 * @property int $heading
 * @property Carbon $created_at
 *
 * @package App\Models
 */
class Notice extends Model
{
	protected $table = 'notice';
	public $timestamps = false;

	protected $casts = [
		'heading' => 'int'
	];

	protected $fillable = [
		'title',
		'ref_file',
		'heading'
	];
}
