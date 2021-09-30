<?php
header('HTTP/1.1 301 Moved Permanently');
header('location:./index.php');
exit();
session_start();
error_reporting(0);
$include = true;
$pResUrl = '../../2018/asc/sepasc12preorderes/';
$pRootUrl = '../../';
include $pResUrl.'index.php';