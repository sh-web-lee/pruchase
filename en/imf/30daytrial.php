<?php
session_start();
error_reporting(0);
$include = true;

if(in_array($_GET['ref'],array('imf1purchasebd','imf2purchasebd','imf2bdactivateb','imf2bdscanactivateb'))){
    $pResUrl = '../../2016/imf/30daypro/';
}else {
    $pResUrl = '../../2016/imf/30daytrial/';
}
$pRootUrl = '../../';
include $pResUrl.'index.php';