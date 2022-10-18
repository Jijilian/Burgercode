<?php

class Database
{
    private static $dbHost = "localhost";
    private static $dbName = "affan1811410_3itdx5";
    private static $dbUsername = "affan1811410";
    private static $dbUserpassword = "vnk5ok9ume";
    
    private static $connection = null;
    
    public static function connect()
    {
        if(self::$connection == null)
        {
            try
            {
              self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword);
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
        return self::$connection;
    }
    
    public static function disconnect()
    {
        self::$connection = null;
    }

}
?>
