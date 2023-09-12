<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaskPlan extends Model
{
    protected $table = 'tasks_plan';
    use SoftDeletes;
}
