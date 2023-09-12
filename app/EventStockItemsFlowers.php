<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventStockItemsFlowers extends Model
{
    protected $table = 'event_stock_items_flowers';
    use SoftDeletes;

    public function stock()
    {
        return $this->belongsTo('App\Stock');
    }
}
