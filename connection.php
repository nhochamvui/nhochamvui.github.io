<?php
class DB {
    private static $servername = "localhost";
    private static $dbname = "foodmenu";
    private static $username = "root";
    private static $password = "";
    public static $conn = null;

    public static function createConnection() {
        try {
            self::$conn = new PDO(
                'mysql:host='.self::$servername.';dbname='.self::$dbname,
                self::$username,
                self::$password
            );
            // set the PDO error mode to exception
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
        }
        catch(PDOException $e) {
            die( "Connection failed: " . $e->getMessage());
        }

        return self::$conn;
    }
    public static function checkConnection()
    {
        if(self::$conn)
        {
            echo " => connected!";
        }
        else echo "not connect!";
    }
}