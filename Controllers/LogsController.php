<?php
namespace Controllers;

use League\Plates\Engine;

/**
 * LogsController's constructor
 */
class LogsController {

    private Engine $engine;

    /**
     * LogsController's constructor
     */
    public function __construct(Engine $engine) {
        $this->engine = $engine;
    }

    /* Show logs content */
    public function displayLogs(): void {
        echo $this->engine->render('logs', [
            'menuTitle' => 'Logs'
        ]);
    }
}
