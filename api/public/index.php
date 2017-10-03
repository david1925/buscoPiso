<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
require '../src/model/persist/db.php';

$app = new \Slim\App;

//Customer routes
require '../src/routes/users.php';
require '../src/routes/autonomousCommunities.php';
require '../src/routes/municipalities.php';
require '../src/routes/estates.php';
require '../src/routes/provinces.php';
require '../src/routes/errors.php';
require '../src/routes/additionalFeatures.php';

$app->run();
