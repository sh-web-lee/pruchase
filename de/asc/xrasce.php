<?php
session_start();
error_reporting(0);
$param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
header("location:./index.php".$param);
exit();
$include = true;
$pResUrl = '../../2020/asc/2020xmasxrede/';
$pRootUrl = '../../';
include $pResUrl.'index.php';