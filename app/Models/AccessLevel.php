<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccessLevel extends Model
{
    use SoftDeletes;

    protected $table = 'access_levels';
    protected $fillable = ['ds_access_level'];
}
