<?php
class Connection
{
    public static function make($config)
    {
        $DATABASE_HOST = $config['DATABASE_HOST'];
        $DATABASE_USER = $config['DATABASE_USER'];
        $DATABASE_PASS = $config['DATABASE_PASS'];
        $DATABASE_NAME = $config['DATABASE_NAME'];
        try {
            return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
        } catch (PDOException $exception) {
            exit($exception);
        }
    }
}
