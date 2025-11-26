<?php
namespace Controllers\Router\Route;

use Controllers\CharacterController;
use Services\PersonnageService;
use Controllers\Router\Route;

/**
 * RouteEditCharacter's class
 */
class RouteEditCharacter extends Route {

    private CharacterController $controller;
    private PersonnageService $service;

    /**
     * RouteEditCharacter's constructor
     */
    public function __construct(string $name, CharacterController $controller) {
        parent::__construct($name);
        $this->controller = $controller;
        $this->service = new PersonnageService();
    }

    public function get($params = []) {
        $id = $this->getParam($params, "id", false);

        $character = $this->service->getById($id);
        if (!$character) {
            return $this->controller->displayAddCharacter(
                new \Helpers\Message(
                    "Personnage introuvable.",
                    \Helpers\Message::MESSAGE_COLOR_ERROR,
                    "Erreur"
                )
            );
        }

        return $this->controller->displayCharacter($character);
    }

    public function post($params = []) {
        $params = array_merge($_GET, $_POST);
        try {
            $data = [
                "id" => $this->getParam($params, "id", false),
                "name" => $this->getParam($params, "name", false),
                "element" => $this->getParam($params, "element", false),
                "weapon" => $this->getParam($params, "weapon", false),
                "origin" => $this->getParam($params, "origin", true),
                "url_img" => $this->getParam($params, "urlImg", false),
                "rarity" => $this->getParam($params, "rarity", false)
            ];
            $this->controller->editCharacter($data);
        } catch (\Exception $e) {
            $this->controller->displayAddCharacter(
                new \Helpers\Message($e->getMessage(), \Helpers\Message::MESSAGE_COLOR_ERROR)
            );
        }
    }
}