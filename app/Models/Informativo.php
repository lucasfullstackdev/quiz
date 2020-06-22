<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Informativo extends Model
{
    use SoftDeletes;

    protected $table = 'informativos';
    protected $fillable = ['ds_informativo_path', 'questionario_id', 'sn_primeiro', 'sn_ultimo'];
}
