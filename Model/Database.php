<?php

class Database
{
    public static function openConnection(): PDO
    {
        //setting up the right variables to connect with the DB
        $dbhost = "localhost";
        $dbuser = "newuser";
        $dbpass = "newuser";
        $db = "php-crud";

        //driver options
        $driverOptions = [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        return new PDO('mysql:host=' . $dbhost . ';dbname=' . $db, $dbuser, $dbpass, $driverOptions);
    }
}
