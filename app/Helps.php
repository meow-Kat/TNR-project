<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Helps extends Model
{
    protected $fillable = [ 
        'help_category_id', 'name', 'address', 
    ];
    
    public function category()
    {
        $this->hasMany('App\Help','id','help_category_id')
    }
}
