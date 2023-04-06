<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Admin
 *
 * @property int $id
 * @property int $name
 * @property int $email
 * @property int $password
 * @property int $created_at
 * @property int $updated_at
 *
 * @package App\Models
 */
class Admin extends Model
{
	protected $table = 'admin';
	protected $primaryKey = 'id';

	protected $fillable = [
		'name',
		'email',
		'password',
        'created_at',
        'updated_at',
	];
}
