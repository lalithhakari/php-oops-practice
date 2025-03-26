<?php

// Singleton pattern ensures that a class has only one instance and provides a global point of access to it.
final class Database
{
    private static $instance = null;
    private $connection;

    // Constructor is always private to prevent instantiation
    private function __construct()
    {
        $this->connection = 'Connected to database';
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
