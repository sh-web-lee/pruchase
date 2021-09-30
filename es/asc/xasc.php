<?php
error_reporting(0);
$param = $_SERVER["QUERY_STRING"] ? ('?' . $_SERVER["QUERY_STRING"]) : '';
header("location:./index.php" . $param);
$include = true;
//$pResUrl = '../../2018/asc/xmasrces/';
// $pResUrl = '../../2019/asc/novxmasxres/';
$pResUrl = '../../2020/asc/novxmases2020/';
// $pResUrl = '../../2020/asc/novxmasxres2020/';
$pRootUrl = '../../';
include $pResUrl . 'index.php';
