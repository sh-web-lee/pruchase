<?php
session_start();
//error_reporting(0);
header("Location:https://es.itopvpn.com/screenrecorder/promotion/isr" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
exit();
$include = true;
$pResUrl = '../../2021/isr/apr2021es/';
$pRootUrl = '../../';
include $pResUrl . 'index.php';