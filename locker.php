<?php
/**
 * Created by PhpStorm.
 * User: oleksandrkolpakov
 * Date: 04.05.16
 * Time: 19:07
 */
require_once "session_config.php";
require_once "memcached_config.php";
require_once "output.php";

session_id(SESSION_NAME);
$sleep_time = 10;
//output('Starting session');
session_start();
$_SESSION['test'] = 1;
output("Sleeping...");
sleep($sleep_time);
output("Checking the session:".$_SESSION['test']);