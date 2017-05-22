<?php

use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\Micro;

$di = new FactoryDefault();

$di->setShared('db', function () use ($di) {
    return new \Phalcon\Db\Adapter\Pdo\Postgresql(array(
        "host" => 'db',
        "username" => 'test',
        "password" => 'password',
        "dbname" => 'test'
    ));
});

$app = new Micro($di);

$app->get("/", function () use ($app) {
    echo "<h1>Welcome from Phalcon!</h1>";
    echo '<h2>Collumns from table users</h2>';
    echo '<pre>';

    $res = $app['db']->query('SELECT *
        FROM information_schema.columns
        WHERE table_schema = \'public\'
          AND table_name   = \'users\'
        ')->fetchAll();

    foreach ($res as $row) {
        var_dump($row['column_name']);
    }

    echo '</pre>';
});

$app->handle();