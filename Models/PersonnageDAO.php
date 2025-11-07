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
        $request = $this->execRequest($sql);
        $data = $request->fetchAll();

        return $data;
    }

    /**
     * Get a character by its ID
     */
    public function getByID(string $idPersonnage): array {
        $sql = "SELECT * FROM personnage WHERE id_personnage = ?";
        $request = $this->execRequest($sql, [$idPersonnage]);
        $data = $request->fetch();

        return $data;
    }
}

?>