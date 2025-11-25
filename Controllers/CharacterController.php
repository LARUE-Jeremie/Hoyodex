<?php
namespace Controllers;

use League\Plates\Engine;

/**
 * CharacterController's constructor
 */
class CharacterController {

    private Engine $engine;

    /**
     * CharacterController's constructor
     */
    public function __construct(Engine $engine) {
        $this->engine = $engine;
    }

    /**
     * Show character content
     */
    public function displayCharacter() {
        echo $this->engine->render("character", [
            "menuTitle" => "Modifier un personnage"
        ]);
    }

    public function displayAddCharacter() {
        echo $this->engine->render("character", [
            "menuTitle" => "Ajouter un personnage"
        ]);
    }
}
