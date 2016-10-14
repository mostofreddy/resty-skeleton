<?php
/**
 * Index
 *
 * PHP version 7+
 *
 * Copyright (c) 2016 Federico Lozada Mosto <mosto.federico@gmail.com>
 * For the full copyright and license information, please view the LICENSE file that was distributed with this source code.
 *
 * @category  Modulus
 * @package   Modulus\Example
 * @author    Federico Lozada Mosto <mosto.federico@gmail.com>
 * @copyright 2016 Federico Lozada Mosto <mosto.federico@gmail.com>
 * @license   MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @link      http://www.mostofreddy.com.ar
 */
$path = realpath(__DIR__.'/../');
require $path."/vendor/autoload.php";

use Resty\Api;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$configFilePath = realpath(__DIR__.'/../config/config.php');

$config = include_once $configFilePath ;

$app = new Api($config);


$app->get(
    '/', 
    function (Request $req, Response $res) {
        return $res->withJson(
            "Hello world!", 
            200
        );
    }
);

// run App
$app->run();
