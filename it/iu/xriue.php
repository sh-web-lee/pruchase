<?php
session_start();
error_reporting(0);
$include = true;
$param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
header("location:./index.php".$param);
if (in_array($_GET['pop'], array('xr_iue'))) {
  // $pResUrl = '../../2019/iu/noviu9xmasexpit/';
  // $pResUrl = '../../2020/iu/xmasxe2020it/';
  $pResUrl = '../../2020/iu/sepsale2020it/';

} else {
  // $pResUrl = '../../2019/iu/noviu9xmasexpit/';
  $pResUrl = '../../2020/iu/sepsale2020it/';
  // $pResUrl = '../../2020/iu/xmasxe2020it/';
}
$pRootUrl = '../../';
include $pResUrl . 'index.php';
