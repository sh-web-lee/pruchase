<?php
session_start();
error_reporting(0);
$include = true;

header("location:./index.php" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));

$pResUrl = '../../2020/asc/marchfr/';
$pRootUrl = '../../';
include $pResUrl.'index.php';