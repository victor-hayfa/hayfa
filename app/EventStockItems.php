<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventStockItems extends Model
{
    protected $table = 'event_stock_items';
    use SoftDeletes;

    public function stock()
    {
        return $this->belongsTo('App\Stock');
    }
}
