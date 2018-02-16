<?php

final class DB {

    private static $db;

    public static function getInstance()
    {
        if(!self::$db) {
            $db = new \mysqli('127.0.0.1', 'root', '', 'guestbook');
            if($db->errno) {
                die("Error while connect to MySQL");
            }
            self::$db = $db;
        }

        return self::$db;
    }

}