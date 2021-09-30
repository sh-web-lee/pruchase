<?php
session_start();
error_reporting(0);
$include = true;
header("location:./index.php".(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));
exit();
$pResUrl = '../../2018/imf/aprsafeboxfr/';
$pRootUrl = '../../';
include $pResUrl.'index.php';