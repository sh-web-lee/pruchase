<?php
session_start();
error_reporting(0);
header("Location:https://de.itopvpn.com/screenrecorder/promotion/isr" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
exit();
$include = true;
$pResUrl = '../../2021/isr/launchsalede/';
$pRootUrl = '../../';
include $pResUrl.'index.php';