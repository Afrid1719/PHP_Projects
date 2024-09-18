<?php
class DBConnection {
    private static $_instance;
    private $connection;

    private function __construct() {
        try {
            $this->connection = new mysqli("localhost", "root", "", "test");
            echo "DB Connected successfully";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function getInstance() {
        if (!isset(self::$_instance)) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}

$conn = DBConnection::getInstance()->getConnection();
