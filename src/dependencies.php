<?php
// DIC configuration

$container = $app->getContainer();


// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

$container['db'] = function ($c) {
    $db = $c->get('settings')['db'];
    $pdo = new PDO("mysql:host=" . $db['host'] . ";dbname=" . $db['dbname'],
        $db['user'], $db['pass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
};

$container['mongodb'] = function ($c) {
    // connect
    $m = new \MongoDB\Driver\Manager("mongodb://bookkartuser:bookkartpass@localhost:27017/bookkartdb");

//    $m = new MongoDB\Driver\Manager("mongodb://bookkartuser:bookkartpass@localhost:27017/");//.$mongodb['user'].":".$mongodb['pass']."@".$mongodb['host'].":".$mongodb['port']."/");
    //$db = $m->bookkartdb;//$mongodb['dbname'];
    return $m;
};

$container['Controller'] = function($c) {
    return new Controller($c);
};
