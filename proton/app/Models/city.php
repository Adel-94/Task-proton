<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    protected $table = 'cities';

           public function advert()
    {
       return $this->hasMany('App\Models\advert','city_id','id');
    }
}
