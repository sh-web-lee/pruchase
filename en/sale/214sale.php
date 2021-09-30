<?php
session_start();
error_reporting(0);
header("location:../asc/index.php" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
exit();
$include = true;
$pResUrl = '../../2020/sale/feb214sale/';
$pRootUrl = '../../';
include $pResUrl.'index.php';