<?php

namespace App\Http\Services;
use App\Models\User;

class UserService
{
    public static function all()
    {
        return User::all()->except([1, 2]);
    }

    public static function update($userData)
    {
        if (empty($userData['password'])) {
            unset($userData['password']);
        }

        try {
            return User::find(Auth()->user()->id)->update($userData);
        } catch (\Throwable $th) {
            
        }
        
    }

}
