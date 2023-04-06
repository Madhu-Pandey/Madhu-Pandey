<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Enquiry
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $message
 * @property Carbon $created_at
 *
 * @package App\Models
 */
class Enquiry extends Model
{
	protected $table = 'enquiry';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'email',
		'message',
        'created_at'
	];
}
