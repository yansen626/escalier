<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 14 Jan 2019 07:21:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Role
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $admin_users
 *
 * @package App\Models
 */
class Role extends Eloquent
{
	protected $fillable = [
		'name',
		'description'
	];

	public function admin_users()
	{
		return $this->hasMany(\App\Models\AdminUser::class);
	}
}
