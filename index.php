<?php
$start = microtime(true);
require_once 'vendor/autoload.php';

use Monolog\Formatter\LogstashFormatter;
use Monolog\Logger;

$log = new Logger('myapp_logger');
$logPath = 'C:\Programs\dev\logstash-2.1.1\bin\logstash.log';
$stream = new Monolog\Handler\StreamHandler($logPath);
$log->pushHandler($stream);
$eventSourceName = '127.0.0.1';
$eventTypeName = 'monolog_sourced_log';
$formater = new LogstashFormatter($eventTypeName, $eventSourceName, null, 'ctxt_', LogstashFormatter::V1);
$stream->setFormatter($formater);
$processor = new Monolog\Processor\WebProcessor();
$log->pushProcessor($processor);
usleep(rand(1,100) * 1000);
$elapsed = (microtime(true) - $start) * 1000;
$log->log(Logger::DEBUG, 'Request logged', ['timing' => $elapsed]);

