<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserAccessLevel extends Model
{
    use SoftDeletes;

    protected $table = 'user_access_levels';
    protected $fillable = ['user_id', 'access_level_id'];
}
