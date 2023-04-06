<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Achievement
 *
 * @property int $id
 * @property string $ref_file
 * @property string $title
 * @property int $seq_no.
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Achievement extends Model
{
	protected $table = 'achievements';

	protected $casts = [
		'seq_no' => 'int'
	];

	protected $fillable = [
		'ref_file',
		'title',
		'seq_no.'
	];
}
