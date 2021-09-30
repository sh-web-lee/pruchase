<?php
session_start();
error_reporting(0);
header("Location:https://es.itopvpn.com/screenrecorder/promotion/isrspecial" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
exit();
$include = true;
$pResUrl = '../../2021/isr/aprspeciales/';
$pRootUrl = '../../';
include $pResUrl.'index.php';