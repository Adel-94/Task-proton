<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class district extends Model
{
    protected $table = 'district';

            public function advert()
    {
       return $this->hasMany('App\Models\advert','distr_id','id');
    }
}
