<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public $timestamps = false;

    protected $table = 'sections';

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
