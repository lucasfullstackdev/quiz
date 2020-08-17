<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Direito extends Model
{
    use SoftDeletes;

    protected $table = 'direitos';
    protected $fillable = ['descricao'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
