<?php

namespace App\Http\Services;

class Message
{
    private static $code;
    private static $body;
    private static $type;
    private static $message = [];

    private static $instace;

    private static function getInstance()
    {
        if (self::$instance === null)
            self::$instace = new self;

        return self::$instace;
    }

    private static function create()
    {
        self::$message = [
            'code' => self::$code,
            'body' => self::$body,
            'type' => self::$type
        ];

        return self::$message;
    }

    public static function success(String $body='')
    {
        self::$code = 200;
        self::$body = $body;
        self::$type = 'success';

        return self::create();
    }
}