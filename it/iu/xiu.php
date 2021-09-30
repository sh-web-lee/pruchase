<?php
session_start();
error_reporting(0);
$param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
header("location:./index.php".$param);
$include = true;
//$pResUrl = '../../2018/iu/iunatale2018xrit/';
//$pResUrl = '../../2019/iu/novxiu2019it/';
// $pResUrl = '../../2020/iu/xmasxr2020it/';
$pResUrl = '../../2020/iu/sepsale2020it/';
$pRootUrl = '../../';
include $pResUrl.'index.php';