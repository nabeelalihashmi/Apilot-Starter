<?php


use ApilotEngine\Apilot;

require __DIR__ . "/vendor/autoload.php";
include __DIR__ . "/config/app.php";

$cockpit = "./cockpit";
$routes_cache = "./storage/routes_cahce.php";


$apilot = new Apilot($cockpit, $routes_cache);

/*
    Add Custom routes
*/

$apilot->addRoute("/hello", "./custom_cockpit/say_hello.php" , 'GET', false, false);

// if ($mode == 'dev')
$apilot->dropCache();

$apilot->on404(function() {
    header("HTTP/1.0 404 Not Found");
    echo "404 Not Found";
    // die();
});


$apilot->takeoff();

include "./lib/printRoutesTable.php";

echo printRoutesTable($apilot->getRoutes());
