<?php
session_start();
error_reporting(0);
$include = true;
header("location:./index.php".(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));
exit();
$pResUrl = '../../2019/imf/aprtracknl/';
$pRootUrl = '../../';
include $pResUrl.'index.php';