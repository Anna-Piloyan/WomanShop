<?php

class Db
{
    public static function getConnection()
    {
        $paramsPath = ROOT . '/config/db_params.php';
        $params = include($paramsPath);
        $dsn = "mysql:host={$params['host']};dbname={$params['db']}";
        $db = new PDO($dsn, $params['user'], $params['pass']);
        return $db;
    }
}
