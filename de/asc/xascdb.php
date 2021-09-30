<?php
session_start();
error_reporting(0);
$param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
if($_GET['pop']=='xr_ascdb'){
    header("location:./index.php".$param);
}elseif($_GET['pop']=='xr_dbasc'){
    header("location:../db/index.php".$param);
}
$include = true;
//$pResUrl = '../../2018/asc/xmasascdbde/';
$pResUrl = '../../2019/asc/ascdbxmasde/';
$pRootUrl = '../../';
include $pResUrl.'index.php';