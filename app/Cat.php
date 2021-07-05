<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable = [ 
        'img', 'name', 'age','gender', 'location', 'content', 'vaccine', 'adopt','user_id'
    ];

    public function user()
    {
        return $this->hasOne('App\User', 'user_id','id');
    }
}