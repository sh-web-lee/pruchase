<?php
session_start();
error_reporting(0);
$include = true;
// $pResUrl = '../../2018/db/jangive2018it/';
header("location:../db-ac-register/index.php" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
$pResUrl = '../../2018/db/sepgiveawayit/';
$pRootUrl = '../../';
include $pResUrl.'index.php';