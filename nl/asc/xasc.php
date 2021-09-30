<?php
// session_start();
// error_reporting(0);
// $param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
// header("location:./index.php".$param);
session_start();
error_reporting(0);
$param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
header("location:./index.php".$param);
exit();
$include = true;
// $pResUrl = '../../2018/asc/novxmaspopupnl/';
$pResUrl = '../../2020/asc/novxmasrightcornernl/';
$pRootUrl = '../../';
include $pResUrl.'index.php';