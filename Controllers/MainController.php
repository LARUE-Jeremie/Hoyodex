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
    public function index($gameName) : void {
        $service = new PersonnageService();
        $listPersonnage = $service->getall();
        
        $action = $_GET['action'] ?? 'home';
        $viewFile = __DIR__ . '/../Views/' . $action . '.php';
        if (!file_exists($viewFile)) { $action = 'home'; }

        echo $this->engine->render($action, [
            'gameName' => $gameName,
            'listPersonnage' => $listPersonnage
        ]);
    }
}

?>
