<?php
// header('HTTP/1.1 301 Moved Permanently');
// header('location:./index.php');
// exit();
session_start();
error_reporting(0);
$include = true;
$param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
header("location:./index.php".$param);
// $pResUrl = '../../2017/asc/xascxmas2017it/';
// $pResUrl = '../../2018/asc/natale2018xrit/';
if(in_array($_GET['pop'],array('xr_asc'))){
  // $pResUrl = '../../2019/imf/novascxmasexpit/';
  // $pResUrl = '../../2019/asc/novxasc2019it/';
  $pResUrl = '../../2020/asc/xmasxr2020it/';
}else {
  // $pResUrl = '../../2019/asc/novxasc2019it/';
}
$pResUrl = '../../2020/asc/xmasxr2020it/';
$pRootUrl = '../../';
include $pResUrl.'index.php';
