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

    private function hydrate(array $data): Personnage {
        $personnage = new Personnage();
        $personnage->setId($data['id_personnage']);
        $personnage->setName($data['name']);
        $personnage->setElement($data['element']);
        $personnage->setUnitclass($data['unitclass']);
        $personnage->setOrigin($data['origin'] ?? null);
        $personnage->setRarity((int)$data['rarity']);
        $personnage->setUrlImg($data['url_img']);
        return $personnage;
    }
}

?>
