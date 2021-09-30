<?php
header("location:https://purchase.iobit.com/es/sd-ac-register/index.php");
exit();
session_start();
error_reporting(0);
$include = true;
$pResUrl = '../../2017/sd/julsdacesar/';
$pRootUrl = '../../';
include $pResUrl.'index.php';