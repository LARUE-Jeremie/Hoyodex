<?php

namespace Controllers\Router\Route;

use Controllers\LoginController;

/**
 * RouteLogin's class
 */
class RouteLogin extends Route {

    private LoginController $controller;

    /**
     * RouteLogin's constructor
     */
    public function __construct(string $name, LoginController $controller) {
        parent::__construct($name);
        $this->controller = $controller;
    }

    public function get($params = []) {
        return $this->controller->displayLogin();
    }
    public function post($params = []) {
    }
}

?>
