<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 20 Aug 2019 17:17:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PortofolioImage
 * 
 * @property int $id
 * @property int $portofolio_id
 * @property string $path
 * @property bool $is_main_image
 * @property bool $is_thumbnail
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Portofolio $portofolio
 *
 * @package App\Models
 */
class PortofolioImage extends Eloquent
{
	public $incrementing = false;

	protected $casts = [
		'id' => 'int',
		'portofolio_id' => 'int',
		'is_main_image' => 'bool',
		'is_thumbnail' => 'bool'
	];

	protected $fillable = [
		'portofolio_id',
		'path',
		'is_main_image',
		'is_thumbnail'
	];

	public function portofolio()
	{
		return $this->belongsTo(\App\Models\Portofolio::class);
	}
}
