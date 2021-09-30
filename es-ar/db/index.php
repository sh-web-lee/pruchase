<?php
error_reporting(0);
$queryStr=$_SERVER['QUERY_STRING'];
header("location:https://purchase.iobit.com/es/db/index.php".(empty($queryStr)?'':('?'.$queryStr)));
$include = true;
$pResUrl = '../../2017/db/juldbfirstesar/';
$pRootUrl = '../../';
include $pResUrl.'index.php';