<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 16 Jul 2019 22:40:44 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Post
 * 
 * @property int $id
 * @property string $title
 * @property string $content
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $tags
 *
 * @package App\Models
 */
class Post extends Eloquent
{
	protected $fillable = [
		'title',
		'content'
	];

	public function tags()
	{
		return $this->belongsToMany(\App\Models\Tag::class, 'post_tags')
					->withPivot('id')
					->withTimestamps();
	}
}
