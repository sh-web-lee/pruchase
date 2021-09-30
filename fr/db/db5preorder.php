<?php
header('location:./index.php');
exit();
session_start();
error_reporting(0);
$include = true;
$pResUrl = '../../2017/db/augdb5preorderfr/';
$pRootUrl = '../../';
include $pResUrl.'index.php';