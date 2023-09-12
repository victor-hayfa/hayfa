<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventTask extends Model
{
    protected $table = 'event_tasks';
    use SoftDeletes;

    public function task()
    {
        return $this->belongsTo('App\Task');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany('App\EventTaskComments')->orderBy('created_at', 'desc');
    }

    public function taskOne()
    {
        return $this->hasOne('App\Task', 'id', 'task_id');
    }
}
