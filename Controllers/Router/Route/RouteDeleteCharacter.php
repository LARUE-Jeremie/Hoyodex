<?php

namespace Controllers\Router\Route;

use Controllers\CharacterController;
use Controllers\MainController;

class RouteDeleteCharacter extends Route {

    private CharacterController $controller;
    private MainController $mainController;

    public function __construct(string $name, CharacterController $controller, MainController $mainController) {
        parent::__construct($name);
        $this->controller = $controller;
        $this->mainController = $mainController;
    }

    public function get($params = []) {
        $id = $this->getParam($params, "id", false);
        $this->controller->deleteCharacter($id);
        $message = $this->controller->deleteCharacter($id);
        $this->mainController->index($message);
    }

    public function post($params = []) { }
}

?>
