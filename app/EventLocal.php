<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventLocal extends Model
{
    protected $table = 'events_local';
    use SoftDeletes;
}
