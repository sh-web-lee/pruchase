<?php
header('location:index.php');exit();
session_start();
error_reporting(0);
$include = true;
// $pResUrl = '../../2019/asc/novexpiredxmasfr/';
$pResUrl = '../../2020/asc/expxmasfr/';
$pRootUrl = '../../';
include $pResUrl.'index.php';