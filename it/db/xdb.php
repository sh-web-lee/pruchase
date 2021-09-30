<?php
session_start();
error_reporting(0);
//$param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
//header("location:./index.php".$param);
header("location:./index.php".(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));
exit();
$include = true;
//$pResUrl = '../../2017/db/xdbxmas2017it/';
$pResUrl = '../../2020/db/xmasxr2020it/';
$pRootUrl = '../../';
include $pResUrl.'index.php';