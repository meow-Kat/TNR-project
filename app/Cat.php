<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable = [ 
        'img', 'name', 'age','sex', 'location', 'content', 'vaccine', 'adopt','user_id'
    ];

    public function User()
    {
        return $this->hasOne('App\User', 'user_id','id')
    }
}