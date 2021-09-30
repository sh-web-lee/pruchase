<?php
session_start();
error_reporting(0);

header('HTTP/1.1 301 Moved Permanently');
header('Location: index.php');

$include = true;
$pResUrl = '../../2018/imf/marpreorderfr/';
$pRootUrl = '../../';
include $pResUrl.'index.php';