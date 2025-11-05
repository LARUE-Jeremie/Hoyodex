<?php

namespace Models;

class PersonnageDAO extends BasePDODAO {

    // Methods
    public function getAll(): array {
        $stmt = $this->execRequest("SELECT * FROM personnage");
        $results = $stmt->fetchAll();

        $personnages = [];
        foreach ($results as $row) {
            $personnages[] = new Personnage($row);
        }

        return $personnages;
    }

    public function getByID(string $idPersonnage): ?Personnage {
        $stmt = $this->execRequest("SELECT * FROM personnage WHERE id_personnage = ?", [$idPersonnage]);
        $row = $stmt->fetch();

        if ($row) {
            return new Personnage($row);
        }

        return null;
    }
}

?>