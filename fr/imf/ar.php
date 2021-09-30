<?php
//header('location:index.php'.(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));exit();
session_start();
error_reporting(0);
header("location:./index.php" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));die();
$include = true;
$pResUrl = '../../2018/imf/aprantiransomwarefr/';
$pRootUrl = '../../';
include $pResUrl.'index.php';