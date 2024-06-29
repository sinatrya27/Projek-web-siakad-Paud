<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'pages::index');
$routes->get('/petualangan', 'pages::petualangan');
$routes->get('/jejak_prestasi', 'pages::jejak_prestasi');
$routes->get('/peta_emas', 'pages::peta_emas');
