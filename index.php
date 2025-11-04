<?php

// Loader
require_once('Helpers\Psr4AutoloaderClass.php');
$loader = new Helpers\Psr4AutoloaderClass;
$loader->register();

// Namespaces
$loader->addNamespace('\Helpers', __DIR__ . '/Helpers');
$loader->addNamespace('League\Plates', __DIR__ . '/Vendor/plates/src');

// Engine
$engine = new \League\Plates\Engine(__DIR__ . '/Views');
echo $engine->render('home', ['gameName' => 'Hoyodex']);

?>
