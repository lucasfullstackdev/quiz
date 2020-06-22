<?php

namespace App\Http\Services;

class MessageService
{
    private static $instance;

    private static $message;
    private static $description;
    private static $code;

    private static function getInstance()
    {
        if(self::$instance === null)
            self::$instance = new self;

        return self::$instance;
    }

    public static function success($description, $code)
    {
        self::$description = $description;
        self::$code = $code;
        
        self::$message = [
            'success' => true,
            'description' => self::$description,
            'code' => self::$code
        ];

        return self::getInstance();
    }

    public static function error($th)
    {
        self::$message = [
            'success' => false,
            'description' => $th->getMessage(),
            'descriptionCode' => $th->getCode(),
            'code' => 500
        ];

        return self::$message;
    }

    public static function bind($data)
    {
        self::$message['data'] = $data;
        return self::$message;
    }
}
