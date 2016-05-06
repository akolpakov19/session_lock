<?php
/**
 * Created by PhpStorm.
 * User: oleksandrkolpakov
 * Date: 04.05.16
 * Time: 19:07
 */
require_once "session_config.php";
require_once "memcached_config.php";

session_id(SESSION_NAME);
session_start();
$_SESSION['test'] = 1;
sleep(1000);