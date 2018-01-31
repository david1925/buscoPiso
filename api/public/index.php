<?php
if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}


require __DIR__ . '/../vendor/autoload.php';

session_start();

// Instantiate the app
$settings = require __DIR__ . '/../src/settings.php';
$app = new \Slim\App($settings);

// Set up dependencies
require __DIR__ . '/../src/dependencies.php';

// Register middleware
require __DIR__ . '/../src/middleware.php';

// Register routes
require __DIR__ . '/../src/routes.php';

// Register my App
require __DIR__ . '/../src/app_loader.php';

//Requires from model
require_once __DIR__ . '/../src/model/persist/db.php';
require_once __DIR__ . '/../src/model/Users.class.php';
require_once __DIR__ . '/../src/model/Floors.class.php';
require_once __DIR__ . '/../src/model/persist/UsersDAO.class.php';
// Run app
$app->run();
