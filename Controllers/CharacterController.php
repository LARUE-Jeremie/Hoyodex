<?php

namespace Controllers;

use Controllers\MainController;
use League\Plates\Engine;
use Models\Personnage;
use Services\PersonnageService;
use Helpers\Message;

/**
 * CharacterController's constructor
 */
class CharacterController {

    private Engine $engine;
    private PersonnageService $service;
    private MainController $mainController;

    /**
     * CharacterController's constructor
     */
    public function __construct(Engine $engine) {
        $this->engine = $engine;
        $this->service = new PersonnageService;
        $this->mainController = new MainController($engine);
    }

    /**
     * Get FK data
     */
    private function getFkLists(): array {
        return [
            'elements_list' => $this->service->getAllElements(),
            'weapons_list' => $this->service->getAllWeapons(),
            'origins_list' => $this->service->getAllOrigins()
        ];
    }

    /**
     * Display the form to create a new character
     */
    public function displayAddCharacter(): void {
        $fk_data = $this->getFkLists();
        echo $this->engine->render("character", [
            "menuTitle" => "Ajouter un personnage",
            "character" => null,
            "action" => "add-character",
            ...$fk_data,
        ]);
    }

    /**
     * Display the form to edit an existing character
     */
    public function displayCharacter(?Personnage $character = null) {
        if (!$character) {
            return $this->controller->displayAddCharacter(
                new \Helpers\Message(
                    "Personnage introuvable",
                    \Helpers\Message::MESSAGE_COLOR_ERROR,
                    "Erreur"
                )
            );
        }

        $fk_data = $this->getFkLists();
        echo $this->engine->render("character", [
            "menuTitle" => "Modifier un personnage",
            "character" => $character,
            "action" => "edit-character&id=" . $character->getId(),
            ...$fk_data,
        ]);
    }

    /**
     * Add a character then redirect to list
     */
    public function addCharacter(array $data) {
        $result = $this->service->addCharacter($data); 
        $this->mainController->index();
    }

    /**
     * Edit a character then redirect to list
     */
    public function editCharacter(array $data): void {
        $this->service->editCharacter($data);
        $this->mainController->index();
    }

    /**
     * Delete a character then redirect to list
     */
    public function deleteCharacter(string $id): Message {
        $success = $this->service->deleteCharacter($id);
        $message = $success
            ? new Message("Personnage supprimé avec succès", Message::MESSAGE_COLOR_SUCCESS, "Succès")
            : new Message("Erreur lors de la suppression du personnage", Message::MESSAGE_COLOR_ERROR, "Erreur");
        return $message;
    }
}
