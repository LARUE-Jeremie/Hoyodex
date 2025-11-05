<?php

namespace Controllers;
use League\Plates\Engine;
use Services\PersonnageService;

class MainController
{
    // Attributes
    private Engine $engine;

    // Contructor
    public function __construct() {
        $this->engine = new Engine(__DIR__ . '/../Views');
    }

    // Methods
    public function index($gameName) : void {
        echo $this->engine->render('home', ['gameName' => $gameName]);
    }

    // TODO
}

?>
