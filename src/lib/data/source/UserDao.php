<?php

namespace lib\data\source;

use lib\data\db\AppDatabase;
use lib\domain\models\User;

abstract class UserDao {
    abstract function readUserByUsername(string $username): ?User;
    abstract function readUserById(int $id): ?User;
}

class UserDaoImpl extends UserDao {

    public function __construct(
        protected readonly AppDatabase $database
    ) { }

    function readUserByUsername(string $username): ?User
    {
        $conn = $this->database->getConnection();
        $stmt = $conn->prepare("SELECT * FROM ws_users WHERE uname=? LIMIT 1");
        $stmt->bind_param("s",$username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = null;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $user = new User($row['id'], $row['uname'], $row['password']);
            }
        }
        return $user;
    }

    function readUserById(int $id): ?User
    {
        $conn = $this->database->getConnection();
        $stmt = $conn->prepare("SELECT * FROM ws_users WHERE id=? LIMIT 1");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = null;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $user = new User($row['id'], $row['uname'], $row['password']);
            }
        }
        return $user;
    }
}
