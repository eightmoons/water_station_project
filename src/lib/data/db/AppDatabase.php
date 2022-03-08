<?php

namespace lib\data\db;

use mysqli;

class AppDatabase
{
    private string $host = "192.168.0.105";
    private string $port = "9906";
    private string $user = "root";
    private string $pass = "rootpwd";
    private string $name = "water_station_db";

    public function getConnection(): mysqli
    {
        $result = new mysqli(hostname: $this->host, username: $this->user, password: $this->pass, database: $this->name, port: $this->port);
        if ($result->connect_errno) {
            echo "Failed to connect to MySQL: " . $result -> connect_error;
            exit();
        }
        else {
            return $result;
        }
    }

//    public function createDatabase() {
//        $db = /** @lang MariaDB */ <<<SQL_QUERY
//        CREATE DATABASE IF NOT EXISTS {$this->name};
//        SQL_QUERY;
//        $dbConn = new mysqli($this->host, $this->user, $this->pass, "", $this->port);
//        $dbConn->query($db);
//        $dbConn->close();
//        $conn = $this->getConnection();
//        $ws_products = <<<SQL_QUERY
//        CREATE TABLE IF NOT EXISTS ws_products (
//            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//            name VARCHAR(256) NOT NULL,
//            description VARCHAR(512) NOT NULL,
//            items VARCHAR(512) NOT NULL,
//            price FLOAT NOT NULL DEFAULT 0)
//        SQL_QUERY;
//        $conn->query($ws_products);
//        $ws_users = <<<SQL_QUERY
//        CREATE TABLE IF NOT EXISTS ws_users (
//            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//            username VARCHAR(256) NOT NULL,
//            password VARCHAR(512) NOT NULL)
//        SQL_QUERY;
//        $conn->query($ws_users);
//        $conn->close();
//    }
}
