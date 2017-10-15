<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Searchable;

    public function section()
    {
        return $this->belongsTo('App\Section');
    }

    public function searchableAs()
    {
        return 'name';
    }

    public function subProducts()
    {
        return $this->hasMany('App\Product', 'feature', 'id');
    }

    public function mainProduct()
    {
        return $this->belongsTo('App\Product', 'id', 'feature');
    }

//    public function toSearchableArray()
//    {
//        $array = $this->toArray();
//
//        $array = array('name', 'vendor_code');
//
//        return $array;
//    }

}
