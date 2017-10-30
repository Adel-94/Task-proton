<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class prop_type extends Model
{
    protected $table='prop_types';

       public function advert()
    {
       return $this->hasMany('App\Models\advert','prop_type_id','id');
    }
}
