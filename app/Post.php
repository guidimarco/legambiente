<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'slug', 'member_id'];

    public function member()
    {
        return $this->belongsTo('App\Member');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function imgs()
    {
        return $this->belongsToMany('App\Img');
    }
}
