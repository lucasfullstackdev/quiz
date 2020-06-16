<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Questionario extends Model
{
    use SoftDeletes;
   
    protected $table = 'questionarios';
    protected $fillable = ['ds_questionario'];
}
