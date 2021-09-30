<?php
session_start();
error_reporting(0);
$param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
header("location:./index.php".$param);
exit();
$include = true;
//$pResUrl = '../../2018/iu/iuxmasrcpt/';
// $pResUrl = '../../2019/iu/xmasrcpt/';
$pResUrl = '../../2020/iu/xmasrcpt/';
$pRootUrl = '../../';
include $pResUrl.'index.php';