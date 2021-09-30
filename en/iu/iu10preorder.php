<?php
session_start();
error_reporting(0);
header("location:./index.php".(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));
$include = true;
if(in_array($_GET['to'],array('cleanuninstall'))){
    $pResUrl = '../../2020/iu/iuinstallmonitorpresale/';
} else if(in_array($_GET['to'],array('trd','trdclean'))){
    $pResUrl = '../../2020/iu/iuautocleanpresale/';
} else {
  $pResUrl = '../../2020/iu/iu10preorderrc/';
}
$pRootUrl = '../../';
include $pResUrl . 'index.php';
