<?php

namespace Models;

/**
 * DAO for character
 */
class PersonnageDAO extends BasePDODAO {

    /**
     * Get all the characters
     */
    public function getAll(): array {
        $sql = "SELECT * FROM personnage";
        $stmt = $this->execRequest($sql);
        $data = $stmt->fetchAll();

        return $data;
    }

    /**
     * Get a character by its ID
     */
    public function getByID(string $idPersonnage): array {
        $sql = "SELECT * FROM personnage WHERE id_personnage = ?";
        $stmt = $this->execRequest($sql, [$idPersonnage]);
        $data = $stmt->fetch();

        return $data;
    }
}

?>