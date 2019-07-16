<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 16 Jul 2019 23:30:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ProductShop
 * 
 * @property int $id
 * @property int $product_id
 * @property int $shop_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Product $product
 * @property \App\Models\Shop $shop
 *
 * @package App\Models
 */
class ProductShop extends Eloquent
{
	protected $table = 'product_shop';

	protected $casts = [
		'product_id' => 'int',
		'shop_id' => 'int'
	];

	protected $fillable = [
		'product_id',
		'shop_id'
	];

	public function product()
	{
		return $this->belongsTo(\App\Models\Product::class);
	}

	public function shop()
	{
		return $this->belongsTo(\App\Models\Shop::class);
	}
}
