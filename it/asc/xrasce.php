<?php
session_start();
error_reporting(0);
$include = true;
// $pResUrl = '../../2017/asc/xascxmas2017it/';
// $pResUrl = '../../2018/asc/natale2018xrit/';
$param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
header("location:./index.php".$param);
if(in_array($_GET['pop'],array('xr_asc'))){
  // $pResUrl = '../../2019/imf/novascxmasexpit/';
  // $pResUrl = '../../2019/asc/novascxmasexpit/';
  $pResUrl = '../../2020/asc/xmasxe2020it/';
}else {
  // $pResUrl = '../../2019/asc/novascxmasexpit/';
  $pResUrl = '../../2020/asc/xmasxe2020it/';
}
$pRootUrl = '../../';
include $pResUrl.'index.php';
