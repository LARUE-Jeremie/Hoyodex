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
        $this->service = new PersonnageService();
    }

    /**
     * Display the form to create a new character
     */
    public function displayAddCharacter(?Message $message = null) {
        echo $this->engine->render("character", [
            "menuTitle" => "Ajouter un personnage",
            "message"   => $message,
            "character" => null
        ]);
    }

    /**
     * Display the form to edit an existing character
     */
    public function displayCharacter(string $id, ?Message $message = null) {
        $character = $this->service->getByID($id);

        echo $this->engine->render("character", [
            "menuTitle" => "Modifier un personnage",
            "message"   => $message,
            "character" => $character
        ]);
    }

    /**
     * Delete a character then redirect to list and/or show a message
     */
    public function deleteCharacter(string $id) {
        $success = $this->service->deleteCharacter($id);

        $message = $success
            ? new Message("Personnage supprimé avec succès", Message::MESSAGE_COLOR_SUCCESS, "Succès")
            : new Message("Erreur lors de la suppression du personnage", Message::MESSAGE_COLOR_ERROR, "Erreur");
        return $message;
    }
}
