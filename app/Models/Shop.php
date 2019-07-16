<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 16 Jul 2019 23:29:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Shop
 * 
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $products
 *
 * @package App\Models
 */
class Shop extends Eloquent
{
	protected $fillable = [
		'name'
	];

	public function products()
	{
		return $this->belongsToMany(\App\Models\Product::class)
					->withPivot('id')
					->withTimestamps();
	}
}
