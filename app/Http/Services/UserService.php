<?php

namespace App\Http\Services;
use App\Models\User;

class UserService
{
    public static function all()
    {
        return User::all()->except([1, 2]);
    }

}
