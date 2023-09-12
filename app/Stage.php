<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stage extends Model
{
    protected $table = 'stages';
    use SoftDeletes;

    public function events()
    {
        return $this->hasMany('App\Event');
    }
}
