<?php

class Session
{
    public static function start()
    {
        if(isset($_COOKIE['session_id'])) {
            session_id($_COOKIE['session_id']);
            session_start();
        } else {
            session_start();
            setcookie('session_id', session_id());
        }
    }

    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key, $default = null)
    {
        return !empty($_SESSION[$key]) ? $_SESSION[$key] : $default;
    }

    public static function remove($key) {
        unset($_SESSION[$key]);
    }

    public static function flush()
    {
        session_destroy();
    }
}