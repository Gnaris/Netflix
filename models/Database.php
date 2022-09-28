<?php

class Database{
    
    private static $server = "localhost";
    private static $username = "root";
    private static $password = "";
    private static $db = "phishing";

    private static $pdo;
    
    public static function getPdo()
    {
        if(self::$pdo === null)
        {
            self::$pdo = new PDO('mysql:host=' . self::$server . ';dbname=' . self::$db, self::$username, self::$password);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$pdo;
    }
}


?>