<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use SoftDeletes;
 
    protected $table = 'menus';
    protected $fillable = ['ds_menu', 'ds_menu_icon', 'ds_menu_route'];
}
