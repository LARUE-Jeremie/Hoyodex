<?php

namespace Controllers\Router\Route;

use Controllers\MainController;
use Controllers\Router\Route;

/**
 * RouteIndex's class
 */
class RouteIndex extends Route {

    private MainController $controller;

    /**
     * RouteIndex's constructor
     */
    public function __construct(string $name, MainController $controller) {
        parent::__construct($name);
        $this->controller = $controller;
    }

    public function get($params = []) {
        return $this->controller->index();
    }
    public function post($params = []) {
        return $this->controller->index(); /* TODO */
    }
}

?>
