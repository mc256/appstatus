<?php

header("Access-Control-Allow-Origin: *");

$app->get('/',function() use ($app) {
	$app->render('default.html');
});

$app->error(function (\Exception $e) use ($app) {
   $app->render('500.html');
});

$app->notFound(function () use ($app) {
    $app->render('404.html');
});
