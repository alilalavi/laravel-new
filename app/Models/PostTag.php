<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 16 Jul 2019 22:44:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PostTag
 * 
 * @property int $id
 * @property int $post_id
 * @property int $tag_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Post $post
 * @property \App\Models\Tag $tag
 *
 * @package App\Models
 */
class PostTag extends Eloquent
{
	protected $casts = [
		'post_id' => 'int',
		'tag_id' => 'int'
	];

	protected $fillable = [
		'post_id',
		'tag_id'
	];

	public function post()
	{
		return $this->belongsTo(\App\Models\Post::class);
	}

	public function tag()
	{
		return $this->belongsTo(\App\Models\Tag::class);
	}
}
