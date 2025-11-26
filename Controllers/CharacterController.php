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
     * Display the form to create a new character
     */
    public function displayAddCharacter(): void {
        echo $this->engine->render("character", [
            "menuTitle" => "Ajouter un personnage",
            "character" => null,
            "action" => "add-character"
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

        echo $this->engine->render("character", [
            "menuTitle" => "Modifier un personnage",
            "character" => $character,
            "action" => "edit-character&id=" . $character->getId()
        ]);
    }

    /**
     * Add a character then redirect to list
     */
    public function addCharacter(array $data) {
        $this->service->addCharacter($data);
        $message = $result
            ? new Message("Personnage ajouté !", Message::MESSAGE_COLOR_SUCCESS)
            : new Message("Erreur lors de l'ajout", Message::MESSAGE_COLOR_ERROR);

        echo $this->engine->render("index", [
            "menuTitle" => "Accueil",
            "message" => $message,
            "characters" => $this->service->getAll()
        ]);
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
