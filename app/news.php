<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [ 
        'img', 'title', 'Y-m-d', 'content',
    ];
}
