<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [ 
        'product_category_id', 'img', 'title', 'content', 'price',
    ];

    public function product()
    {
        $this->hasOne('App\product','id','product_category_id');
    }
}
