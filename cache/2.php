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
$time = microtime(true);
foreach(range(1, 20) as $v) {
    $cache->enQueue('a', $v);
    sleep(3);
}
echo microtime(true) - $time;
//Cache::delete();