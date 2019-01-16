<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 14 Jan 2019 07:21:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AdminUser
 * 
 * @property int $id
 * @property int $is_super_admin
 * @property int $role_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $password
 * @property string $language
 * @property int $status_id
 * @property string $image_path
 * @property string $remember_token
 * @property \Carbon\Carbon $email_verified_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Status $status
 * @property \App\Models\Role $role
 *
 * @package App\Models
 */
class AdminUser extends Eloquent
{
	protected $casts = [
		'is_super_admin' => 'int',
		'role_id' => 'int',
		'status_id' => 'int'
	];

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'is_super_admin',
		'role_id',
		'first_name',
		'last_name',
		'email',
		'password',
		'language',
		'status_id',
		'image_path',
		'remember_token',
		'email_verified_at'
	];

	public function status()
	{
		return $this->belongsTo(\App\Models\Status::class);
	}

	public function role()
	{
		return $this->belongsTo(\App\Models\Role::class);
	}
}
