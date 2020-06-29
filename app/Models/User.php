<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;
    
    protected $table = 'users';
    protected $fillable = ['nameil', 'email', 'password'];
    protected $hidden = ['email_verified_at', 'password', 'remember_token'];

    public function getCreatedAtAttribute($createdAt)
    {
        return date('d/m/Y', strtotime($createdAt));
    }
}
