<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 14 Jan 2019 07:21:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ContactMessage
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $message
 * @property \Carbon\Carbon $created_at
 *
 * @package App\Models
 */
class ContactMessage extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'name',
		'email',
		'message'
	];
}
