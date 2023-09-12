<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventTaskComments extends Model
{
    protected $table = 'event_task_comments';
    use SoftDeletes;

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    
}
