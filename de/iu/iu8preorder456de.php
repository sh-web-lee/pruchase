<?php
header('HTTP/1.1 301 Moved Permanently');
header("location:index.php".(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));
session_start();
error_reporting(0);
$include = true;
$pResUrl = '../../2018/iu/julyiu8preorder456de/';
$pRootUrl = '../../';
include $pResUrl.'index.php';