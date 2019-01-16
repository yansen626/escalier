<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 14 Jan 2019 07:21:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Status
 * 
 * @property int $id
 * @property string $description
 * 
 * @property \Illuminate\Database\Eloquent\Collection $admin_users
 *
 * @package App\Models
 */
class Status extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'description'
	];

	public function admin_users()
	{
		return $this->hasMany(\App\Models\AdminUser::class);
	}
}
