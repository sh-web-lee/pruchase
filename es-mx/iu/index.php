<?php
error_reporting(0);
$queryStr=$_SERVER['QUERY_STRING'];
header("location:https://purchase.iobit.com/es/iu/index.php".(empty($queryStr)?'':('?'.$queryStr)));
session_start();
$include = true;
$pResUrl = '../../2017/iu/juliufirstesmx/'; 
$pRootUrl = '../../';
include $pResUrl.'index.php';