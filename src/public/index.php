<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

session_start();

// Instantiate the app
$settings = require __DIR__ . '../settings.php';
$app = new \Slim\App($settings);

// Set up dependencies
require __DIR__ . '../dependencies.php';


// Register middleware
require __DIR__ . '../middleware.php';


// Register routes
require __DIR__ . '../routes.php';

// Run app
$app->run();