<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("MODULE", ROOT . '/module');
define("CORE", ROOT . '/vendor/mvctest/core');
define("LIBS", ROOT . '/vendor/mvctest/core/libs');
define("CONF", ROOT . '/config');
define("LAYOUT", 'main');

// http://mvctest/public/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
// http://mvctest/public/
$app_path = preg_replace("#[^/]+$#", '', $app_path);
// http://mvctest
$app_path = str_replace('/public/', '', $app_path);
define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';