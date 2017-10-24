<?php

$database = require 'core/bootstrap.php';

// require 'routes.php';
//
// require $router->direct($uri);
//

$uri = trim($_SERVER['REQUEST_URI'], '/');

$router =  Router::load('routes.php');

require $router->direct($uri);
