<?php

namespace Models;

use PDO;
use Exception;
use PDOStatement;
use Config\Config;

/**
 * Base DAO
 */
class BasePDODAO {

    private ?PDO $db = null;

    /**
     * Get the database used
     */
    public function getDB(): PDO {
        if ($this->db === null) {
            try {
                $this->db = new PDO(Config::get('dsn'),Config::get('user'),Config::get('pass'));
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            } catch (Exception $e) {
                die("Database connection error : " . $e->getMessage());
            }
        }
        return $this->db;
    }

    /**
     * Execute an SQL request
     */
    protected function execRequest(string $sql, ?array $params = null): PDOStatement|false {
        $pdo = $this->getDB();

        if ($params) {
            $stmt = $pdo->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } else {
            return $pdo->query($sql);
        }
    }
}

?>