<?php
header("location:https://purchase.iobit.com/es/iu-ac-register/index.php");
exit();
session_start();
error_reporting(0);
$include = true;
$pResUrl = '../../2017/iu/juliuacesmx/';
$pRootUrl = '../../';
include $pResUrl.'index.php';