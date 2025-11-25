<?php
namespace Controllers\Router\Route;

use Controllers\ElementController;

/**
 * RouteElement's class
 */
class RouteElement extends Route {

    private ElementController $controller;

    /**
     * RouteElement's constructor
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
