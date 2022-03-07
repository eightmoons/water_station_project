<?php

namespace lib\data\db;

use mysqli;

class AppDatabase
{
    private string $host = "localhost";
    private string $port = "9906";
    private string $user = "root";
    private string $pass = "";
    private string $name = "water_station_db";

    public function getConnection(): mysqli
    {
        $result = mysqli_connect(hostname: $this->host, username: $this->user, password: $this->pass, database: $this->name, port: $this->port);
        if ($result->connect_errno) {
            echo "Failed to connect to MySQL: " . $result -> connect_error;
            exit();
        }
        else {
            return $result;
        }
    }
}
