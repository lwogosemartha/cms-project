<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->get('/', 'Home::murepo');
$routes->get('cms-home', 'Home::myhome');
$routes->get('jerry', 'Home::jerry');