<?php
session_start();
error_reporting(0);
$param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
// header("location:./index.php".$param);
$include = true;
// $pResUrl = '../../2018/asc/novascdbxrsv/';
$pResUrl = '../../2020/asc/novascdbxrsv/';
$pRootUrl = '../../';
include $pResUrl.'index.php';