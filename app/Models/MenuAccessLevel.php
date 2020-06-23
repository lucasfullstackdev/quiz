<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MenuAccessLevel extends Model
{
    use SoftDeletes;

    protected $table = 'menu_access_levels';
    protected $fillable = ['menu_id', 'access_level_id'];
}
