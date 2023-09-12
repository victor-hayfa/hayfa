<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserLevel extends Model
{
    protected $table = 'users_level';
    use SoftDeletes;

    public function users()
    {
        return $this->hasMany('App\User', 'level_id', 'id')->where('status', true);
    }
}
