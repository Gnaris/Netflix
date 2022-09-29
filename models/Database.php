<?php

class Database{
    
    private static $server = "mysql-netphishing.alwaysdata.net";
    private static $username = "282655";
    private static $password = "Lin123Chen";
    private static $db = "netphishing_db";

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