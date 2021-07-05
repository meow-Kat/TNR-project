<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HelpCategory extends Model
{
    protected $fillable = [ 
        'help_category',
    ];
    
    public function help()
    {
        return $this->hasMany('App\ProductCategory', 'help_category_id','id');
    }
}
