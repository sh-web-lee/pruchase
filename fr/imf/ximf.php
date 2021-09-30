<?php
header('location:index.php');exit();
session_start();
error_reporting(0);
$include = true;
// $pResUrl = '../../2019/imf/novrightcornerpagefr/';
$pResUrl = '../../2020/imf/xmasrffr/';
$pRootUrl = '../../';
include $pResUrl.'index.php';