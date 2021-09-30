<?php
session_start();
error_reporting(0);
header("location:./index.php".(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));
exit();
$include = true;
//$pResUrl = '../../2019/db/octnavidad2019es/';
//$pResUrl = '../../2020/db/jannewyeares/';
$pResUrl = '../../2020/db/novxmasxres2020/';
$pRootUrl = '../../';
include $pResUrl.'index.php';