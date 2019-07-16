<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable =
        [
          'title'
        ];

    public static function find(int $int)
    {
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
