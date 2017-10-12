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


//    public function toSearchableArray()
//    {
//        $array = $this->toArray();
//
//        $array = array('name', 'vendor_code');
//
//        return $array;
//    }

}
