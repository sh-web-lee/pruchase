<?php
session_start();
error_reporting(0);
 $param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
 header("location:./index.php".$param);
 exit();
$include = true;
// $pResUrl = '../../2017/iu/xiude/';
// $pResUrl = '../../2019/iu/xmasexpde/';
$pResUrl = '../../2020/iu/xmasexpiredde/';
$pRootUrl = '../../';
include $pResUrl . 'index.php';
