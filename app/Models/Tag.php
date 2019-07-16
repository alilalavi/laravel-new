<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 16 Jul 2019 22:40:49 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tag
 * 
 * @property int $id
 * @property string $title
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $posts
 *
 * @package App\Models
 */
class Tag extends Eloquent
{
	protected $fillable = [
		'title'
	];

	public function posts()
	{
		return $this->belongsToMany(\App\Models\Post::class, 'post_tags')
					->withPivot('id')
					->withTimestamps();
	}
}
