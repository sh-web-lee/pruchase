<?php
session_start();
error_reporting(0);
 $param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
 header("location:./index.php".$param);
 exit();
$include = true;
// $pResUrl = '../../2019/imf/xmasrcdk/';
$pResUrl = '../../2020/imf/xmasrightdk/';
$pRootUrl = '../../';
include $pResUrl.'index.php';