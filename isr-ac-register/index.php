<?php
session_start();
error_reporting(0);
header("Location:https://recorder.itopvpn.com/israc" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
exit();
$include = true;
$pResUrl = '../2021/isr/aprisrac/';
$pRootUrl = '../';
include $pResUrl.'index.php';