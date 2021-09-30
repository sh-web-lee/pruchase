<?php
error_reporting(0);
session_start();
$include = true;
if(in_array($_GET['to'],array('launchnews','launchnewsmin','launchbox1','launchbox2','launchbox3','launchboxmin1','launchboxmin2','launchboxmin3'))){
  $pResUrl = '../../2019/imf/maynewinstalloldfr/';
} else {
  $pResUrl = '../../2019/imf/maynewinstallfr/';
}
$pRootUrl = '../../';
include $pResUrl.'index.php';