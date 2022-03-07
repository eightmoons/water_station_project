<?php

namespace lib\data\db;

use mysqli;

class AppDatabase
{
    private readonly string $host = "localhost";
    private readonly string $port = "3306";
    private readonly string $user = "root";
    private readonly string $pass = "";
    private readonly string $name = "water_station_db";

    public function getConnection(): mysqli
    {
        $result = mysqli_connect(
            hostname: $this->host,
            username: $this->user,
            password: $this->pass,
            database: $this->name,
            port: $this->port
        );
        if ($result->connect_errno) {
            echo "Failed to connect to MySQL: " . $result -> connect_error;
            exit();
        }
        else {
            return $result;
        }
    }
}
