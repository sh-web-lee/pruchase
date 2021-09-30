<?php
header('location:index.php');exit();
session_start();
error_reporting(0);
$include = true;
// $pResUrl = '../../2019/imf/novximf2019it/';
$pResUrl = '../../2020/imf/xmasxr2020it/';
$pRootUrl = '../../';
include $pResUrl.'index.php';