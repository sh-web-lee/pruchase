<?php
header('location:index.php'.(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));exit();
session_start();
error_reporting(0);
$include = true;
if(in_array($_GET['to'],array('prerenew'))){
  $pResUrl = '../../2020/imf/marimf8preorderexpde/';
} else {
  $pResUrl = '../../2020/imf/imf8preorderde/';
}
$pRootUrl = '../../';
include $pResUrl.'index.php';