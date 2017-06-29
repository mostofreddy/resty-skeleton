<?php
/**
 * Config
 *
 * PHP version 7+
 *
 * Copyright (c) 2016 Federico Lozada Mosto <mosto.federico@gmail.com>
 * For the full copyright and license information, please view the LICENSE file that was distributed with this source code.
 *
 * @category  Resty
 * @package   Resty
 * @author    Federico Lozada Mosto <mosto.federico@gmail.com>
 * @copyright 2016 Federico Lozada Mosto <mosto.federico@gmail.com>
 * @license   MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @link      http://www.mostofreddy.com.ar
 */

$config = [];

$config['settings'] = [
    "determineRouteBeforeAppMiddleware" => true,
    // Display error (prod: false)
    "displayErrorDetails" => true,
    // Router cache (prod: realpath(__DIR__."/..")."/cache/route.cache")
    "routerCacheFile" => false,

    // App metada
    "app" => [
        "name" => "Welcome to Resty",
        "version" => "0.1.0"
    ]
];

return $config;
