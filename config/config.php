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

// Slim config
$config['settings'] = [
    "displayErrorDetails" => true,
    "routerCacheFile" => false,
    "determineRouteBeforeAppMiddleware" => true
];

// Base
$config['app'] = [
    "name" => "Medios-api",
    "version" => "0.1.0"
];


return $config;
