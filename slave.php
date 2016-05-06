<?php
/**
 * Created by PhpStorm.
 * User: oleksandrkolpakov
 * Date: 06.05.16
 * Time: 12:49
 */
require_once "session_config.php";
require_once 'memcached_config.php';

session_id(SESSION_NAME);
session_start();
$_SESSION['test'] = 10;