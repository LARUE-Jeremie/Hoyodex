<?php

namespace Controllers;
use League\Plates\Engine;
use Services\PersonnageService;

class MainController
{
    // Attributes
    private Engine $engine;

    // Contructor
    public function __construct(Engine $engine) {
        $this->engine = $engine;
    }

    // Methods
    public function index($gameName) : void {
        $service = new PersonnageService();
        $listPersonnage = $service->getall();
        $first = $listPersonnage[0];
        $other = $service->getByID('1');
        echo $this->engine->render('home', [
            'gameName' => $gameName,
            'listPersonnage' => $listPersonnage,
            'first' => $first,
            'other' => $other,
        ]);
    }
}

?>
