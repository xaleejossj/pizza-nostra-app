<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Index::index');
$routes->get('menu', 'Menu::index');
$routes->get('recepcionPedidos', 'RecepcionPedidos::index');
$routes->get('preparacionPedidos', 'PreparacionPedidos::index');
$routes->get('services', 'Servicios::index');
$routes->get('contact', 'Contacto::index');
$routes->get('blog', 'Blog::index');
$routes->get('about', 'About::index');
