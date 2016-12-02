<?php

require_once __DIR__."/../vendor/autoload.php";

$app = new Silex\Application();
$app['debud'] = true;

$app->get('/hello', function() {
    return 'Ola mundo!';
});

$app->run();