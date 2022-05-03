<?php

namespace lib\data\source;

use lib\data\db\AppDatabase;
use lib\domain\models\Recover;
use lib\domain\models\User;

abstract class RecoverDao {
    abstract function generateLink(int $uid): ?Recover;
    abstract function searchByCode(string $code): ?Recover;
    abstract function searchById(int $id): ?Recover;
    abstract function updateRecover(int $id): ?Recover;
    abstract function getActiveLink(int $uid): ?Recover;
}

class RecoverDaoImpl extends RecoverDao {

    public function __construct(
        protected readonly AppDatabase $database
    ) { }

    function generateRandomString(): string {
        $str = substr(str_shuffle(MD5(microtime())), 0, 32);
        $recover = $this->searchByCode($str);
        if ($recover == null) {
            return $str;
        }
        else {
            return $this->generateRandomString();
        }
    }

    function generateLink(int $uid): ?Recover
    {
        $conn = $this->database->getConnection();
        $stmt = $conn->prepare("INSERT INTO ws_recovery (user_id, code) VALUES (?,?)");
        $res = $this->generateRandomString();
        $stmt->bind_param('ss', $uid, $res);
        $stmt->execute();
        $result = $stmt->get_result();
        return $this->searchById($stmt->insert_id);
    }

    function searchByCode(string $code): ?Recover
    {
        $conn = $this->database->getConnection();
        $stmt = $conn->prepare("SELECT * FROM ws_recovery WHERE code=? LIMIT 1");
        $stmt->bind_param("s",$code);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = null;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $user = new Recover($row['id'], $row['user_id'], $row['code'], $row['is_used']);
            }
        }
        return $user;
    }

    function updateRecover(int $id): ?Recover
    {
        $conn = $this->database->getConnection();
        $stmt = $conn->prepare("UPDATE ws_recovery SET is_used=1 WHERE id=?");
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $this->searchById($stmt->insert_id);
    }

    function searchById(int $id): ?Recover
    {
        $conn = $this->database->getConnection();
        $stmt = $conn->prepare("SELECT * FROM ws_recovery WHERE code=? LIMIT 1");
        return $this->getId($stmt, $id);
    }

    function getActiveLink(int $uid): ?Recover
    {
        $conn = $this->database->getConnection();
        $stmt = $conn->prepare("SELECT * FROM ws_recovery WHERE user_id=? AND is_active=1 LIMIT 1");
        return $this->getId($stmt, $uid);
    }

    /**
     * @param bool|\mysqli_stmt $stmt
     * @param int $id
     * @return Recover|null
     */
    public function getId(bool|\mysqli_stmt $stmt, int $id): ?Recover
    {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = null;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $user = new Recover($row['id'], $row['user_id'], $row['code'], $row['is_used']);
            }
        }
        return $user;
    }
}
