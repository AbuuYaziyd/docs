<?php

$routes->get('/', 'DocsController::index');
$routes->get('locale/(:any)', 'DocsController::locale/$1');