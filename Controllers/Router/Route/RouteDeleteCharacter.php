<?php

namespace Controllers\Router\Route;

use Controllers\CharacterController;

class RouteDeleteCharacter extends Route {

    private CharacterController $controller;

    public function __construct(string $name, CharacterController $controller) {
        parent::__construct($name);
        $this->controller = $controller;
    }

    public function get($params = []) {
        $id = $this->getParam($params, "id", false);

        // Delete
        $this->controller->deleteCharacter($id);

        // Redirection avec message
        $this->controller->displayIndex(["message" => "Personnage supprimé !"]);
    }

    public function post($params = []) { }
}

?>
