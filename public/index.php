<?php

use Phalcon\Mvc\Micro;

$app = new Micro();

$app->get(
    "/",
    function () {
        echo "<h1>Welcome from Phalcon!</h1>";
    }
);

$app->handle();