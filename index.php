<?php
require __DIR__ . '/vendor/autoload.php';
$logObj = new Monolog\Logger('name');

var_dump($logObj);

$logObj->pushHandler(new Monolog\Handler\StreamHandler('warning.log', Monolog\Logger::WARNING));
$logObj->addWarning('It is an example of warning text, if php gives warning, catch this and set that text here, will be saved in log file');

