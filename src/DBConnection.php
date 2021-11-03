<?php 

final class DBConnection {

    private static $instance = null;
    private static $connection;

    public static function getInstance() {

        if(is_null(self::$instance)){
            self::$instance = new DBConnection();
        }
        return self::$instance;
    }

    // overwriting methods
    private function __construct() {}
    private function __clone() {}
    public function __wakeup() {}

    public static function connect($host, $dbname, $user, $password) {
        self::$connection = new PDO("mysql:dbname=$dbname;host=$host", $user, $password);
    }

    public static function getConnection() {
        return self::$connection;
    }



}