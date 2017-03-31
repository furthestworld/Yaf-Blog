<?php
// 除了 E_NOTICE，报告其他所有错误
error_reporting(E_ALL ^ E_NOTICE);
define('APPLICATION_PATH', dirname(__FILE__));
define('BASE_URL', "http://blog.yaf.vm/");
define('STATIC_PUBLIC', BASE_URL  . '/');
define('CACHE_TIME', 3600);
define('IP', "127.0.0.1");

$application = new Yaf_Application(APPLICATION_PATH . "/conf/application.ini");

$application->bootstrap()->run();
