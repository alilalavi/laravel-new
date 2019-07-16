<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 16 Jul 2019 23:29:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Product
 * 
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $shops
 *
 * @package App\Models
 */
class Product extends Eloquent
{
	protected $fillable = [
		'name'
	];

	public function shops()
	{
		return $this->belongsToMany(\App\Models\Shop::class)
					->withPivot('id')
					->withTimestamps();
	}
}
