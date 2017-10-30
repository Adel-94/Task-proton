<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class announcer extends Model
{
    protected $table = 'announcer'; 
    protected $fillable = [
      'announcer_type'
    ];

        public function advert()
    {
       return $this->hasMany('App\Models\advert','announcer_id','id');
    }
}
