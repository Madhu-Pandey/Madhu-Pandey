<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Video
 * 
 * @property int $id
 * @property string $thumbnail
 * @property string $video
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Video extends Model
{
	protected $table = 'video';

	protected $fillable = [
		'thumbnail',
		'video'
	];
}
