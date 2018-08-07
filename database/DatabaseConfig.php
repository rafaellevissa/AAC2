<?php
trait DatabaseConfig
{
    protected static $host;
    protected static $dbname;
    protected static $username;
    protected static $password;

    public static function databaseConfigAttributes()
    {
        # Put your credentials of database localhost here
        self::$host = "localhost";
        self::$dbname = "aac";
        self::$username = "root";
        self::$password = "";
    }
}
