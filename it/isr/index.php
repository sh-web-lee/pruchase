<?php
session_start();
error_reporting(0);
header("Location:https://it.itopvpn.com/screenrecorder/promotion/isr" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
exit();
$include = true;
header("location:https://it.itopvpn.com/screenrecorder/promotion/isr".(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));
$pResUrl = '../../2021/isr/apr2021it/';
$pRootUrl = '../../';
include $pResUrl.'index.php';