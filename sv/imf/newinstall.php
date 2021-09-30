<?php
session_start();
error_reporting(0);
$include = true;
if(in_array($_GET['to'],array('launchnews','launchnewsmin','launchbox1','launchbox2','launchbox3','launchboxmin1','launchboxmin2','launchboxmin3'))){
  $pResUrl = '../../2020/imf/maynewlaunchsv/';
} else {
  $pResUrl = '../../2020/imf/maynewinstallsv/';
}
$pRootUrl = '../../';
include $pResUrl.'index.php';