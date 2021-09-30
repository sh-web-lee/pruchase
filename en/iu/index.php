<?php
session_start();
error_reporting(0);
$include = true;

if(in_array($_GET['to'],array('iuasc','iu5asc'))){
  $pResUrl = '../../2021/iu/iuascjunesmrsale/';
}else {
  $pResUrl = '../../2021/iu/junesmrsale/';
}
$pRootUrl = '../../';
include $pResUrl . 'index.php';
