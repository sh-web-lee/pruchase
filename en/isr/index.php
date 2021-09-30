<?php
session_start();
error_reporting(0);
header("Location:https://recorder.itopvpn.com/purchase" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
exit();
$include = true;
$pResUrl = '../../2021/isr/marlaunchnew/';
$pRootUrl = '../../';
include $pResUrl.'index.php';