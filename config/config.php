<?php
/**
 * Config
 *
 * PHP version 7+
 *
 * Copyright (c) 2016 Federico Lozada Mosto <mosto.federico@gmail.com>
 * For the full copyright and license information, please view the LICENSE file that was distributed with this source code.
 *
 * @category  RestySkeleton
 * @package   RestySkeleton
 * @author    Federico Lozada Mosto <mosto.federico@gmail.com>
 * @copyright 2016 Federico Lozada Mosto <mosto.federico@gmail.com>
 * @license   MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @link      http://www.mostofreddy.com.ar
 */

$config = [];

$config['settings'] = [
    // Slim configuration
    "displayErrorDetails" => true,
    //"routerCacheFile" => false,
    "determineRouteBeforeAppMiddleware" => true,

    // meta de la app
    "app" => [
        "name" => "Resty App",
        "version" => "0.7.3"
    ],

    // loger
    "loggy" => [
        "logger" => [
            [
                "level" => \Mostofreddy\Loggy\Logger::DEBUG,
                "handler" => "\Mostofreddy\Loggy\Handler\File",
                "config" => [
                    "output" => realpath(__DIR__."/../logs").'/',
                    'fileName' => "resty"
                ]
            ]
        ]
    ],

    // comandos
    "commands" => []
];

// Servicios
$config['services'] = [
    '\Resty\Slim\Providers\LoggyServiceProvider'
];

return $config;
