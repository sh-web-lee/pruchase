<?php
session_start();
//error_reporting(0);
header("Location:https://pt.itopvpn.com/screenrecorder/promotion/ac-register" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
exit();
$include = true;
$pResUrl = '../../2021/isr/aprisracpt/';
$pRootUrl = '../../';
include $pResUrl.'index.php';
