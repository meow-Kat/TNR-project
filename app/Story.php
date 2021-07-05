<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = [ 
        'help_category_id', 'img', 'title', 'content', 
    ];

    public function FunctionName()
    {
        $this->hasOne('App\help', 'id','id');
    }
}
