<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{      
	protected $table='gallery';
       protected $fillable = [
       'img_path','advert_id'
    ];

    public function advert()
    {
       return $this->belongsTo('App\Models\advert','advert_id','id');
    }
}
