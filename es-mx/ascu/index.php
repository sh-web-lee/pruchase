<?php
error_reporting(0);
$queryStr=$_SERVER['QUERY_STRING'];
header("location:https://purchase.iobit.com/es/ascultimate/index.php".(empty($queryStr)?'':('?'.$queryStr)));
exit();
error_reporting(0);
$include = true;
$pResUrl = '../../2017/ascu/julascufirstesmx/';
$pRootUrl = '../../';
include $pResUrl.'index.php';