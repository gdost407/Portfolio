<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/thankyouhtml', 'Home::thankyouhtml');
$routes->post('/SendEmail', 'Home::sendEmail');
