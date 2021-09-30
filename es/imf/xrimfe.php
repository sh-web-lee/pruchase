<?php
$param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
header("location:./index.php".$param);
session_start();
error_reporting(0);
$include = true;
// $pResUrl = '../../2019/imf/novxmasexpes/';
$pResUrl = '../../2020/imf/novxmasexpes2020/';
$pRootUrl = '../../';
include $pResUrl.'index.php';