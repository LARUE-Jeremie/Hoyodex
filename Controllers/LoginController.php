<?php

namespace Controllers;

use League\Plates\Engine;

/**
 * LoginController's constructor
 */
class LoginController {

    private Engine $engine;

    /**
     * LoginController's constructor
     */
    public function __construct(Engine $engine) {
        $this->engine = $engine;
    }

    /**
     * Show element content
     */
    public function displayLogin(): void {
        echo $this->engine->render('login', [
            'menuTitle' => 'Login'
        ]);
    }
}

?>