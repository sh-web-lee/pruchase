<?php
session_start();
error_reporting(0);
$include = true;

header('HTTP/1.1 301 Moved Permanently');
header('Location: index.php');

$pResUrl = '../../2018/imf/marpreorderde/';
$pRootUrl = '../../';

include $pResUrl.'index.php';