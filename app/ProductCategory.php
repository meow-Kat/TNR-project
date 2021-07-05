<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = [ 
        'category',
    ];

    public function category()
    {
        return $this->hasMany('App\Help', 'product_category_id', 'id')
    }
}
