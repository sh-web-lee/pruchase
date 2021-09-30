<?php
error_reporting(0);
$queryStr=$_SERVER['QUERY_STRING'];
header("location:https://purchase.iobit.com/es/db/index.php".(empty($queryStr)?'':('?'.$queryStr)));
session_start();
$include = true;
$pResUrl = '../../2017/db/juldbfirstesmx/'; 
$pRootUrl = '../../';
include $pResUrl.'index.php';