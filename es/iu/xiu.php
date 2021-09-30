<?php
session_start();
error_reporting(0);
$param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
header("location:./index.php".$param);
$include = true;
// $pResUrl = '../../2018/iu/xiurces/'; 
// $pResUrl = '../../2019/iu/novxriu19es/'; 
$pResUrl = '../../2020/iu/novxmasxres2020/'; 
$pRootUrl = '../../';
include $pResUrl.'index.php';