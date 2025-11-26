<?php

namespace Controllers;

use League\Plates\Engine;

/**
 * ElementController's constructor
 */
class ElementController {

    private Engine $engine;

    /**
     * ElementController's constructor
     */
    public function __construct(Engine $engine) {
        $this->engine = $engine;
    }

    /**
     * Show element content
     */
    public function displayElement(): void {
        echo $this->engine->render('element', [
            'menuTitle' => 'Ajouter un élément'
        ]);
    }
}

?>