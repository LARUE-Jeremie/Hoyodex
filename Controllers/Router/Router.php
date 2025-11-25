<?php

namespace Controllers\Router;

use Controllers\MainController;
use Controllers\CharacterController;
use Controllers\ElementController;
use Controllers\LogsController;
use Controllers\LoginController;
use Controllers\Router\Route\RouteIndex;
use Controllers\Router\Route\RouteAddCharacter;
use Controllers\Router\Route\RouteEditCharacter;
use Controllers\Router\Route\RouteDeleteCharacter;
use Controllers\Router\Route\RouteAddElement;
use Controllers\Router\Route\RouteLogs;
use Controllers\Router\Route\RouteLogin;

/**
 * Router's class
 */
class Router {

    private array $routeList = [];
    private array $ctrlList = [];
    private string $action_key;

    /**
     * Router's constructor
     */
    public function __construct(string $name_of_action_key = "action") {
        $this->action_key = $name_of_action_key;
        $this->createControllerList();
        $this->createRouteList();
    }

    /**
     * Creates a Controller list
     */
    private function createControllerList() {
        global $engine;
        $this->ctrlList["main"] = new MainController($engine);
        $this->ctrlList["character"] = new CharacterController($engine);
        $this->ctrlList["element"] = new ElementController($engine);
        $this->ctrlList["logs"] = new LogsController($engine);
        $this->ctrlList["login"] = new LoginController($engine);
    }

    /**
     * Creates a Route list
     */
    private function createRouteList() {
        $this->routeList["index"] = new RouteIndex("index", $this->ctrlList["main"]);
        $this->routeList["add-character"] = new RouteAddCharacter("add-character", $this->ctrlList["character"]);
        $this->routeList["edit-character"] = new RouteEditCharacter("edit-character", $this->ctrlList["character"]);
        $this->routeList["delete-character"] = new RouteDeleteCharacter("delete-character", $this->ctrlList["character"]);
        $this->routeList["add-element"] = new RouteAddElement("add-element", $this->ctrlList["element"]);
        $this->routeList["logs"] = new RouteLogs("logs", $this->ctrlList["logs"]);
        $this->routeList["login"] = new RouteLogin("login", $this->ctrlList["login"]);
    }

    /**
     * Routing function
     */
    public function routing($get, $post) {

        $action = $get[$this->action_key] ?? "index";
        if (!isset($this->routeList[$action])) {
            $action = "index";
        }
        $route = $this->routeList[$action];
        
        $method = (!empty($post)) ? 'POST' : 'GET';
        $route->action($method === 'POST' ? $post : $get, $method);        
    }
}

?>
