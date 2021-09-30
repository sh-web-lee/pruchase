<?php
header('location:index.php');exit();
session_start();
error_reporting(0);
$include = true;

// if(in_array($_GET['pop'],array('xr_imfe'))){
//   $pResUrl = '../../2019/imf/novimfxmasexpit/';
// }else {
//   $pResUrl = '../../2019/imf/novimfxmasexpit/';
// }
$pResUrl = '../../2020/imf/xmasxe2020it/';
$pRootUrl = '../../';
include $pResUrl.'index.php';