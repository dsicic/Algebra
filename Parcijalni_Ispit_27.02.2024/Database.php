<?php

class Database {
    private static $instance = null;
    private $connection;

    private function __construct() {
        $host = ConfigManager::getConfig('db_host');
        $dbname = ConfigManager::getConfig('db_name');
        $user = ConfigManager::getConfig('db_user');
        $pass = ConfigManager::getConfig('db_pass');

        $this->connection = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}
