<?php
/**
 * Index.php
 *
 * PHP version 5.5+
 */


$rootPath = realpath(__DIR__."/..")."/";
require_once $rootPath."vendor/autoload.php";

$app = new \Resty\Application();
$app->setEnv(\Resty\Environment::DEV);
$app->run();
