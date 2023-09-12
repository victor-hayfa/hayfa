<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    protected $table = 'events';
    use SoftDeletes;

    public function local()
    {
        return $this->belongsTo('App\EventLocal');
    }

    public function tasks()
    {
        return $this->hasMany('App\EventTask');
    }

    public function items()
    {
        return $this->hasMany('App\EventStockItems')->orderBy('quantity', 'desc');
    }

    // public function user()
    // {
    //     return $this->belongsTo('App\User');
    // }
}
