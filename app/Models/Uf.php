<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Uf extends Model
{
    use SoftDeletes;

    protected $table = 'uf';
    protected $fillable = ['titulo', 'slug'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
