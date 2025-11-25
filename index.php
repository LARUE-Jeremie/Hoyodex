<?php

// Loader
require_once('Helpers\Psr4AutoloaderClass.php');
use Helpers\Psr4AutoloaderClass;
$loader = new Psr4AutoloaderClass;
$loader->register();

// Namespaces
$loader->addNamespace('\Helpers', __DIR__ . '/Helpers');
$loader->addNamespace('League\Plates', __DIR__ . '/Vendor/plates/src');
$loader->addNamespace('Controllers', __DIR__ . '/Controllers');
$loader->addNamespace('Config', __DIR__ . '/Config');
$loader->addNamespace('Models', __DIR__ . '/Models');
$loader->addNamespace('Services', __DIR__ . '/Services');
$loader->addNamespace('Exceptions', __DIR__ . '/Exceptions');

// Engine
use League\Plates\Engine;
$engine = new Engine(__DIR__ . '/Views');

// Router
use Controllers\Router\Router;
$router = new Router();
$router->routing($_GET, $_POST);

?>
