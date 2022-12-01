<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('loadfeed', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'feedController', 'method'=>'index'), array()));
$routes->add('updatefeed', new Route(constant('URL_SUBFOLDER') . '/fetchxmlfeed', array('controller' => 'feedController', 'method'=>'fetchxmlfeeddata'), array()));
