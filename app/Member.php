<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['name', 'surname', 'mail', 'role', 'description', 'visible', 'img'];
}