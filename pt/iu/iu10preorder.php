<?php
session_start();
error_reporting(0);
header("location:./index.php".(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));
$include = true;
$pResUrl = '../../2020/iu/iu10preorderrcpt/';
$pRootUrl = '../../';
include $pResUrl.'index.php';