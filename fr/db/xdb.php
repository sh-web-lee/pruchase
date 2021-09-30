<?php
session_start();
error_reporting(0);
header("location:./index.php".(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));
exit();
$include = true;
// $pResUrl = '../../2017/db/decxmaspopfr/';
// $pResUrl = '../../2018/db/novxmaspopupfr/';
$pResUrl = '../../2020/db/righcornerxmasfr/';
$pRootUrl = '../../';
include $pResUrl.'index.php';