<?php

namespace App\Http\Services;

class Message
{
    private static $code;
    private static $body;
    private static $type;
    private static $message = [];

    private static $instance;

    private static function getInstance()
    {
        if (self::$instance === null)
            self::$instance = new self;

        return self::$instance;
    }

    public static function code($code)
    {
        self::$code = $code;
        
        return self::getInstance();
    }

    public static function body($body)
    {
        self::$body = $body;

        return self::getInstance();
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

    public static function error()
    {
        self::$type = 'danger';

        return self::create();
    }
}
