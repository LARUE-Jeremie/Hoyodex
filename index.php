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

// Controller
use Controllers\MainController;
$controller = new MainController($engine);
$controller->index('Genshin Impact');

// DAO
use Models\PersonnageDAO;
$personnageDAO = new PersonnageDAO();

// Query
$personnages = $personnageDAO->getAll();

?>
