<?php
header("location:https://purchase.iobit.com/es/imf-ac-register/index.php");
exit();
session_start();
error_reporting(0);
$include = true;
$pResUrl = '../../2017/imf/julimfacesar/';
$pRootUrl = '../../';
include $pResUrl.'index.php';