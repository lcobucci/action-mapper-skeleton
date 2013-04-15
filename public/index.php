<?php
require_once __DIR__ . '/../boot.php';

use Lcobucci\ActionMapper2\Config\ApplicationBuilder;

$app = ApplicationBuilder::build(
    __DIR__ . '/../config/routes.xml'
);

$app->getRouteManager()->addRoute(
    '/testing',
    function () use ($app) {
        return 'Just kidding ;)';
    }
);

$app->run();
