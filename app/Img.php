<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Img extends Model
{
    protected $fillable = ['img'];

    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }
}
