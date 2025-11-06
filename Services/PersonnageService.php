<?php

namespace Services;

use Models\Personnage;
use Models\PersonnageDAO;

class PersonnageService {

    // Attributes
    private PersonnageDAO $dao;

    // Constructor
    public function __construct() {
        $this->dao = new PersonnageDAO();
    }

    // Methods
    public function getAll(): array {
        $data = $this->dao->getAll();
        $list = [];
        foreach ($data as $row) {
            $list[] = $this->hydrate($row);
        }
        return $list;
    }

    public function getByID(string $id): ?Personnage {
        $row = $this->dao->getByID($id);
        if ($row) {
            return $this->hydrate($row);
        }
        return null;
    }

    private function hydrate(array $row): Personnage {
        $personnage = new Personnage();
        $personnage->setId($row['id_personnage']);
        $personnage->setName($row['name']);
        $personnage->setElement($row['element']);
        $personnage->setUnitclass($row['unitclass']);
        $personnage->setOrigin($row['origin'] ?? null);
        $personnage->setRarity((int)$row['rarity']);
        $personnage->setUrlImg($row['url_img']);
        return $personnage;
    }
}

?>
