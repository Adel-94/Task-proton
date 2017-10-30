<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class advert extends Model
{
   protected $table='adverts';

   protected $fillable = [
        'adv_type_id', 'prop_type_id', 'prop_price','prop_area','prop_quantity','author_id','city_id','distr_id','station_id','subway_id','active','announcer_id','active'
    ];
       public function advert_type()
    {
       return $this->belongsTo('App\Models\advert_type','adv_type_id','id');
    }
        public function prop_type()
    {
       return $this->belongsTo('App\Models\prop_type','prop_type_id','id');
    }
       public function author()
    {
       return $this->belongsTo('App\Models\author','author_id','id');
    }
         public function announcers()
    {
       return $this->belongsTo('App\Models\announcer','announcer_id','id');
    }
         public function cities()
    {
       return $this->belongsTo('App\Models\city','city_id','id');
    }
      public function districts()
    {
       return $this->belongsTo('App\Models\district','distr_id','id');
    }
        public function stations()
    {
       return $this->belongsTo('App\Models\station','station_id','id');
    }
        public function subways()
    {
       return $this->belongsTo('App\Models\subway','subway_id','id');
    }
       public function gallery()
    {
       return $this->hasMany('App\Models\gallery','advert_id','id');
    }

}
