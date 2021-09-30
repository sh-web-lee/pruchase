<?php
session_start();
error_reporting(0);
$param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
header("location:./index.php".$param);
exit();
$include = true;
// $pResUrl = '../../2017/db/xmassaleptb/';
//$pResUrl = '../../2018/db/xmasrcpt/';
// $pResUrl = '../../2019/db/xmasrcpt/';
$pResUrl = '../../2020/db/xmasrcpt/';
$pRootUrl = '../../';
include $pResUrl . 'index.php';
