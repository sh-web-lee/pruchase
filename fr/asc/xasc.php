<?php
header('location:index.php');exit();
session_start();
error_reporting(0);
$include = true;
// $pResUrl = '../../2019/asc/novrightcornerfr/';
$pResUrl = '../../2020/asc/rightxmasfr/';
$pRootUrl = '../../';
include $pResUrl.'index.php';