<?php
session_start();
error_reporting(0);
header("location:./index.php" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
exit();
$include = true;
$pResUrl = '../../2019/asc/febsalesv/';
$pRootUrl = '../../';
include $pResUrl.'index.php';