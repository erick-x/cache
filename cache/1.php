<?php
/**
 * Created by PhpStorm.
 * User: windrunner414
 * Date: 18-5-11
 * Time: 下午6:22
 */
ini_set('memory_limit', '1024G');
require 'Cache.php';
$cache = Cache::getInstance();
$null = 0;
$valid = 0;
$invalid = 0;
$time = microtime(true);
$c = 0;
foreach(range(1, 20) as $v) {
    $a = $cache->deQueue('a');
    $c++;
    if ($a == $c) {
        $valid++;
    } else if ($a === null) {
        $null++;
    } else {
        $invalid++;
    }
    sleep(3);
}
echo microtime(true) - $time;
var_dump($null);var_dump($valid);var_dump($invalid);