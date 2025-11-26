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
        $sql = "SELECT
                    P.id_personnage, P.name, P.rarity, P.url_img,
                    P.element, P.weapon, P.origin,
                    E.name AS element_name,
                    W.name AS weapon_name,
                    O.name AS origin_name
                FROM
                    personnage P
                JOIN
                    element E ON P.element = E.id
                JOIN
                    weapon W ON P.weapon = W.id
                LEFT JOIN
                    origin O ON P.origin = O.id";
        $request = $this->execRequest($sql);
        $data = $request->fetchAll();

        return $data;
    }

    /**
     * Get a character by its ID
     */
    public function getByID(string $idPersonnage): array {
        $sql = "SELECT
                    P.id_personnage, P.name, P.rarity, P.url_img,
                    P.element, P.weapon, P.origin,
                    E.name AS element_name,
                    W.name AS weapon_name,
                    O.name AS origin_name
                FROM
                    personnage P
                JOIN
                    element E ON P.element = E.id
                JOIN
                    weapon W ON P.weapon = W.id
                LEFT JOIN
                    origin O ON P.origin = O.id
                WHERE P.id_personnage = ?";
        $request = $this->execRequest($sql, [$idPersonnage]);
        $data = $request->fetch();

        return $data;
    }

    /**
     * Create a new character
     */
    public function addCharacter(array $data): bool {
        $sql = "INSERT INTO personnage (id_personnage, name, element, weapon, origin, rarity, url_img) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $id = uniqid();
        $params = [
            $id,
            $data['name'],
            $data['element'],
            $data['weapon'],
            $data['origin'],
            $data['rarity'],
            $data['url_img']
        ];
        $request = $this->execRequest($sql, $params);
        return $request->rowCount() > 0;
    }

    /**
     * Edit an existing character
     */
    public function editCharacter(array $data): bool {
        $sql = "UPDATE personnage 
                SET name = ?, element = ?, weapon = ?, origin = ?, rarity = ?, url_img = ?
                WHERE id_personnage = ?";
        $params = [
            $data['name'],
            $data['element'],
            $data['weapon'],
            $data['origin'],
            $data['rarity'],
            $data['url_img'],
            $data['id']
        ];
        $request = $this->execRequest($sql, $params);
        return $request->rowCount() > 0;
    }

    /**
     * Delete a character by its ID
     */
    public function deleteCharacter(string $id): bool {
        $sql = "DELETE FROM personnage WHERE id_personnage = ?";
        $request = $this->execRequest($sql, [$id]);
        return $request->rowCount() > 0;
    }

    /**
     * Get all ID and Name pairs for a given FK table
     */
    public function getAllFkData(string $tableName): array {
        $sql = "SELECT id, name FROM {$tableName}"; 
        $request = $this->execRequest($sql);
        return $request->fetchAll(\PDO::FETCH_ASSOC);
    }
}

?>
