<?php
header("location:./index.php".(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));
die();
session_start();
error_reporting(0);
$include = true;
$pResUrl = '../../2021/iu/iu11preorderiu/';
$pRootUrl = '../../';
include $pResUrl . 'index.php';