<?php

namespace Controllers\Router\Route;

/**
 * Route's class
 */
abstract class Route {
    
    protected string $name;
    protected string $method;
    
    /**
     * Route's constructor
     */
    public function __construct(string $name) {
        $this->name = $name;
        $this->method = 'GET';
    }

    /**
     * Call GET or POST methods
     */
    public function action($params = [], $method = 'GET') {
        $method = strtoupper($method);
        if ($method === 'POST') {
            return $this->post($params);
        }
        return $this->get($params);
    }

    /**
     * Get parameters in an array, for GET or POST methods
     */
    protected function getParam(array $array, string $paramName, bool $canBeEmpty = true) {
        if (!isset($array[$paramName])) {
            return $canBeEmpty ? null : throw new \Exception("Missing paramter : $paramName");
        }
        if (!$canBeEmpty && empty($array[$paramName])) {
            throw new \Exception("Empty parameter : $paramName");
        }
        return $array[$paramName];
    }

    /**
     * GET function
     */
    abstract public function get($params = []);
    /**
     * POST function
     */
    abstract public function post($params = []);
}

?>
