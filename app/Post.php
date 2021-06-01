<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['author_id', 'title', 'body', 'slug'];

    public function member()
    {
        return $this->belongsTo('App\Member');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
