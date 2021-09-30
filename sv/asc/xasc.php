<?php
session_start();
error_reporting(0);
$param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
header("location:./index.php".$param);
 $include = true;
 // $pResUrl = '../../2019/asc/novxmasxrsv/';
  $pResUrl = '../../2020/asc/novxmasxrsv2020/';
 $pRootUrl = '../../';
 include $pResUrl.'index.php';