<?php

namespace Controllers\Router\Route;

use Controllers\ElementController;
use Controllers\Router\Route;

/**
 * RouteAddElement's class
 */
class RouteAddElement extends Route {

    private ElementController $controller;

    /**
     * RouteAddElement's constructor
     */
    public function __construct(string $name, ElementController $controller) {
        parent::__construct($name);
        $this->controller = $controller;
    }

    public function get($params = []) {
        return $this->controller->displayElement();
    }
    public function post($params = []) {
        /* TODO */
    }
}
