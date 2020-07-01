<?php

namespace App\Http\Services;
use App\Models\User;
use App\Http\Services\Message;

class UserService
{
    public static function all()
    {
        return User::all()->except([1, 2]);
    }

    public static function update($userData)
    {
        if (empty($userData['password']))
            unset($userData['password']);

        if ($userData['password'] !== $userData['password_confirmation'])
            return Message::code(400)->body('Senhas Diferentes')->error();

        $userData['password'] = bcrypt($userData['password']);
        
        try {
            User::find(Auth()->user()->id)->update($userData);
            return Message::success('Registro Salvo com sucesso!');
        } catch (\Throwable $th) {
            
        }
    }

}
