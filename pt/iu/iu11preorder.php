<?php
session_start();
error_reporting(0);
header("location:./index.php".(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));
$include = true;
$pResUrl = '../../2021/iu/iu11preorderpt/';
$pRootUrl = '../../';
include $pResUrl.'index.php';