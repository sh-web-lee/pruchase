<?php
session_start();
error_reporting(0);
$queryStr=$_SERVER['QUERY_STRING'];
header("location:https://purchase.iobit.com/es/asc/index.php".(empty($queryStr)?'':('?'.$queryStr)));
$include = true;
$pResUrl = '../../2018/asc/jannewyearesmx/';
$pRootUrl = '../../';
include $pResUrl.'index.php';