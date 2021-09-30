<?php
session_start();
error_reporting(0);

if($_GET['to']=='iuasc'){
    $param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
    header('location:./xiuasc.php'.$param);
    exit();
}

$include = true;
$pResUrl = '../../2019/iu/novxmas2019pl/';
$pRootUrl = '../../';
include $pResUrl.'index.php';