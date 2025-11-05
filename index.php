<?php

// Loader
require_once('Helpers\Psr4AutoloaderClass.php');
$loader = new Helpers\Psr4AutoloaderClass;
$loader->register();

// Namespaces
$loader->addNamespace('\Helpers', __DIR__ . '/Helpers');
$loader->addNamespace('League\Plates', __DIR__ . '/Vendor/plates/src');
$loader->addNamespace('Controllers', __DIR__ . '/Controllers');
$loader->addNamespace('Config', __DIR__ . '/Config');
$loader->addNamespace('Models', __DIR__ . '/Models');

// Engine
$engine = new \League\Plates\Engine(__DIR__ . '/Views');

// Controller
use Controllers\MainController;
$controller = new Controllers\MainController;
$controller->index('Genshin Impact');

// DAO
$personnageDAO = new Models\PersonnageDAO();

// Query
$personnages = $personnageDAO->getAll();

?>
