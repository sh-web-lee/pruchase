<?php
session_start();
error_reporting(0);
 $param = $_SERVER["QUERY_STRING"] ? ('?' . $_SERVER["QUERY_STRING"]) : '';
 header("location:./index.php" . $param);
 exit();
$include = true;
// $pResUrl = '../../2017/iu/xiude/';
// $pResUrl = '../../2019/iu/xmasrcde/';
$pResUrl = '../../2020/iu/xmasrightde/';
$pRootUrl = '../../';
include $pResUrl . 'index.php';
