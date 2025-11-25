<?php
namespace Controllers\Router\Route;

use Controllers\CharacterController;

/**
 * RouteEditCharacter's class
 */
class RouteEditCharacter extends Route {

    private CharacterController $controller;

    /**
     * RouteEditCharacter's constructor
     */
    public function __construct(string $name, CharacterController $controller) {
        parent::__construct($name);
        $this->controller = $controller;
    }

    public function get($params = []) {
        return $this->controller->displayCharacter();
    }
    public function post($params = []) {
        /* TODO */
    }
}