<?php 
require('../Slim/Slim.php');
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim(array(
    'templates.path' => '../views'
));


require('../library/router.php');

$app->run();