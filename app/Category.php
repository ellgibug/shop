<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    protected $table = 'categories';

    public function subCategories()
    {
        return $this->hasMany('App\Category', 'parent_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'id', 'parent_id');
    }

    public function sections()
    {
        return $this->hasMany('App\Section');
    }
}
