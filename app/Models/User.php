<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;
    
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'fone',
        'whatsapp',
        'instagram',
        'facebook',
        'logradouro',
        'numero',
        'cep',
        'bairro',
        'complemento',
        'cidade',
        'uf_id',
        'password'
    ];
    protected $hidden = ['email_verified_at', 'password'];

    public function getCreatedAtAttribute($createdAt)
    {
        return date('d/m/Y', strtotime($createdAt));
    }

}
