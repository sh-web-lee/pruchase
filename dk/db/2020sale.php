<?php
session_start();
error_reporting(0);
$include = true;

if($_GET['to']=='upsale2004'){
  $queryStr=$_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
  header("location:./index.php".$queryStr);
  exit;
}

$pResUrl = '../../2020/db/2020saledk/';
$pRootUrl = '../../';

include $pResUrl . 'index.php';