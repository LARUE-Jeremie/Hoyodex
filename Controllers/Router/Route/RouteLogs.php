<?php
namespace Controllers\Router\Route;

use Controllers\LogsController;

/**
 * RouteLogs's class
 */
class RouteLogs extends Route {

    private LogsController $controller;

    /**
     * RouteLogs's constructor
     */
    public function __construct(string $name, LogsController $controller) {
        parent::__construct($name);
        $this->controller = $controller;
    }

    public function get($params = []) {
        return $this->controller->displayLogs();
    }
    public function post($params = []) {
        /* TODO */
    }
}
