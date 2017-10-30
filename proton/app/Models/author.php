<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    protected $table = 'author';

    protected $fillable = ['auth_name','email','phone'];

        public function advert()
    {
       return $this->hasMany('App\Models\advert','author_id','id');
    }
}
