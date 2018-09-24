<?php
trait DatabaseConfig
{
    protected static $host;
    protected static $dbname;
    protected static $username;
    protected static $password;

    public static function databaseConfigAttributes()
    {        
        self::$host = "35.237.179.69";
        self::$dbname = "aac";
        self::$username = "root";
        self::$password = "Luc@slevi";
    }
}