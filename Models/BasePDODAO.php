<?php

namespace Models;

use Config\Config;
use PDO;
use PDOStatement;
use Exception;

class BasePDODAO {

    // Attributes
    private ?PDO $db = null;

    // Methods
    public function getDB(): PDO {
        if ($this->db === null) {
            try {
                $host = Config::get('host');
                $dbname = Config::get('dbname');
                $user = Config::get('user');
                $password = Config::get('password');
                $charset = Config::get('charset', 'utf8');

                $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
                $this->db = new PDO($dsn, $user, $password);

                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            } catch (Exception $e) {
                die("Erreur de connexion à la base de données : " . $e->getMessage());
            }
        }
        return $this->db;
    }

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