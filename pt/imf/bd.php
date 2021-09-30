<?php
header('location:index.php'.(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));exit();
session_start();
error_reporting(0);
$include = true;
$pResUrl = '../../2018/imf/aprbdenginept/';
$pRootUrl = '../../';
include $pResUrl.'index.php';