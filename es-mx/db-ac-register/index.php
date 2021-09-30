<?php
header("location:https://purchase.iobit.com/es/db-ac-register/index.php");
exit();
session_start();
error_reporting(0);
$include = true;
$pResUrl = '../../2017/db/juldbacesmx/';
$pRootUrl = '../../';
include $pResUrl.'index.php';