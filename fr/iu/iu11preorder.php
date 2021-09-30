z<?php
session_start();
error_reporting(0);
header("location:./index.php".(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));
die();
$include = true;
$pResUrl = '../../2021/iu/iu11preorderfr/';
$pRootUrl = '../../';
include $pResUrl.'index.php';