<?php
session_start();
error_reporting(0);
header("location:./index.php" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
exit();
$include = true;
$pResUrl = '../../2020/asc/sepasc14preorderofficialsv/';
$pRootUrl = '../../';
include $pResUrl.'index.php';