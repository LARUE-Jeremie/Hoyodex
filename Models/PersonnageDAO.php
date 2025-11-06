<?php

namespace Models;

class PersonnageDAO extends BasePDODAO {

    // Methods
    public function getAll(): array {
        $sql = "SELECT * FROM personnage";
        $stmt = $this->execRequest($sql);
        $data = $stmt->fetchAll();

        return $data;
    }

    public function getByID(string $idPersonnage): array {
        $sql = "SELECT * FROM personnage WHERE id_personnage = ?";
        $stmt = $this->execRequest($sql, [$idPersonnage]);
        $data = $stmt->fetch();

        return $data;
    }
}

?>