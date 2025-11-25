<?php

namespace Controllers;

use League\Plates\Engine;
use Services\PersonnageService;

/**
 * Main controller
 * Prepares data
 */
class MainController {

    private Engine $engine;

    /**
     * MainController's constructor
     */
    public function __construct(Engine $engine) {
        $this->engine = $engine;
    }

    /**
     * Show index content
     */
    public function index() : void {
        $service = new PersonnageService();
        $listPersonnage = $service->getall();

        echo $this->engine->render('home', [
            'listPersonnage' => $listPersonnage
        ]);
    }
}

?>
