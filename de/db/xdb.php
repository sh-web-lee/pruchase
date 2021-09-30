<?php
session_start();
error_reporting(0);
$param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
header("location:./index.php".$param);
exit();
 $include = true;
 // $pResUrl = '../../2017/db/xdbde/';
// $pResUrl = '../../2018/db/xdbde/';
// $pResUrl = '../../2019/db/xdbde/';
 $pResUrl = '../../2020/db/2020xmasxrde/';
 $pRootUrl = '../../';
 include $pResUrl.'index.php';