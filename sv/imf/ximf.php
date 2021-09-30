<?php
session_start();
error_reporting(0);
//$param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
//header("location:./index.php".$param);
header("location:./index.php".(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));
exit();
$include = true;
// $pResUrl = '../../2017/imf/novximfsv/';
// $pResUrl = '../../2018/imf/novxmasrightsv/';
$pResUrl = '../../2020/imf/novxmasxrsv2020/';
$pRootUrl = '../../';
include $pResUrl.'index.php';