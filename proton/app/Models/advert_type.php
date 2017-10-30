<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class advert_type extends Model
{
   protected $table = 'advert_types';


    public function advert()
    {
       return $this->hasMany('App\Models\advert','adv_type_id','id');
    }
}


