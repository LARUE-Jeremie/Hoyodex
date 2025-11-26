<?php
namespace Controllers\Router\Route;

use Controllers\CharacterController;
use Controllers\Router\Route;

/**
 * RouteAddCharacter's class
 */
class RouteAddCharacter extends Route {

    private CharacterController $controller;

    /**
     * RouteAddCharacter's constructor
     */
    public function __construct(string $name, CharacterController $controller) {
        parent::__construct($name);
        $this->controller = $controller;
    }

    public function get($params = []) {
        return $this->controller->displayAddCharacter();
    }

    public function post($params = []) {
        try {
            $data = [
                "name" => $this->getParam($params, "name", false),
                "element" => $this->getParam($params, "element", false),
                "weapon" => $this->getParam($params, "weapon", false),
                "origin" => $this->getParam($params, "origin", true),
                "url_img" => $this->getParam($params, "urlImg", false),
                "rarity" => $this->getParam($params, "rarity", false)
            ];
            $this->controller->addCharacter($data);

        } catch (\Exception $e) {
            $this->controller->displayAddCharacter(
                new \Helpers\Message($e->getMessage(), \Helpers\Message::MESSAGE_COLOR_ERROR)
            );
        }
    }
}
