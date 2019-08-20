<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 20 Aug 2019 17:20:21 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Category
 * 
 * @property int $id
 * @property string $name
 * 
 * @property \Illuminate\Database\Eloquent\Collection $portofolios
 *
 * @package App\Models
 */
class Category extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function portofolios()
	{
		return $this->hasMany(\App\Models\Portofolio::class);
	}
}
