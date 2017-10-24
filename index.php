<?php

require 'core/bootstrap.php';
// require 'routes.php';
//
// require $router->direct($uri);
//
require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
