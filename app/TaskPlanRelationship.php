<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaskPlanRelationship extends Model
{
    protected $table = 'tasks_plan_relationship';
    use SoftDeletes;

    public function tasks()
    {
        return $this->belongsTo('App\Task', 'task_id');
    }

    public function plan()
    {
        return $this->belongsTo('App\TaskPlan', 'task_plan_id');
    }
}
