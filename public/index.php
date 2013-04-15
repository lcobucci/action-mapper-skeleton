<?php
require_once __DIR__ . '/../boot.php';

use Lcobucci\ActionMapper2\Config\ApplicationBuilder;

$app = ApplicationBuilder::build(
    __DIR__ . '/../config/routes.xml' // Loads the configuration from a XML file
);

$app->getRouteManager()->addRoute(
    '/testing',
    function () use ($app) {
        return 'Just kidding ;)';
    }
);  // Appends a new route on the path "/testing"

$app->run();
