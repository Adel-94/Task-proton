<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class station extends Model
{
    protected $table = 'stations';

            public function advert()
    {
       return $this->hasMany('App\Models\advert','station_id','id');
    }
}
