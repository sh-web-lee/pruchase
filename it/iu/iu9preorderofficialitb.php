<?php
$queryStr=empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING']);
header('location:./index.php'.$queryStr);
session_start();
error_reporting(0);
$include = true;
$pResUrl = '../../2019/iu/julyiu9preorderofficialititb/';
$pRootUrl = '../../';
include $pResUrl.'index.php';