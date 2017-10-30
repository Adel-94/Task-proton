<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class subway extends Model
{
    protected $table ='subwaysss';

            public function advert()
    {
       return $this->hasMany('App\Models\advert','subway_id','id');
    }
}
