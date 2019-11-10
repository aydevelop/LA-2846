<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'text', 'image_path',
    ];

    public function getImagePathAttribute($value)
    {
        return 'http://b.juwric.info/public/img/posts/' . $value;
    }

    public function all_comments()
    {
        return $this->hasMany('App\Comment');
    }
}
