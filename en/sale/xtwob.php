<?php
session_start();
error_reporting(0);
$include = true;
//if(in_array($_GET['pop'],array('xr_ascimf'))){
//    $pResUrl = '../../2020/sale/decascimfxr/';
//}
//else if(in_array($_GET['pop'],array('xr_asciu'))){
//    $pResUrl = '../../2020/sale/decasciuxr/';
//}
//else if(in_array($_GET['pop'],array('xr_ascisu'))){
//    $pResUrl = '../../2020/sale/decascisuxr/';
//}
//else if(in_array($_GET['pop'],array('xr_ascsd'))){
//    $pResUrl = '../../2020/sale/decascsdxr/';
//}
//else if(in_array($_GET['pop'],array('xr_dbimf'))){
//    $pResUrl = '../../2020/sale/decdbimfxr/';
//}
//else if(in_array($_GET['pop'],array('xr_dbiu'))){
//    $pResUrl = '../../2020/sale/decdbiuxr/';
//}
//else if(in_array($_GET['pop'],array('xr_dbisu'))){
//    $pResUrl = '../../2020/sale/decdbisuxr/';
//}
//else if(in_array($_GET['pop'],array('xr_dbsd'))){
//    $pResUrl = '../../2020/sale/decdbsdxr/';
//}
//else if(in_array($_GET['pop'],array('xr_imfiu'))){
//    $pResUrl = '../../2020/sale/decimfiuxr/';
//}
//else if(in_array($_GET['pop'],array('xr_imfisu'))){
//    $pResUrl = '../../2020/sale/decimfisuxr/';
//}
//else if(in_array($_GET['pop'],array('xr_imfsd'))){
//    $pResUrl = '../../2020/sale/decimfsdxr/';
//}
//else if(in_array($_GET['pop'],array('xr_iuisu'))){
//    $pResUrl = '../../2020/sale/deciuisuxr/';
//}
//else if(in_array($_GET['pop'],array('xr_iusd'))){
//    $pResUrl = '../../2020/sale/deciusdxr/';
//}
//else if(in_array($_GET['pop'],array('xr_isusd'))){
//    $pResUrl = '../../2020/sale/decisusdxr/';
//}
//else if(in_array($_GET['pop'],array('x_iuasc'))){
//    $pResUrl = '../../2020/sale/decasciuxr/';
//}
//else if(in_array($_GET['pop'],array('xr_iuimf'))){
//    $pResUrl = '../../2020/sale/decimfiuxr/';
//}
//else {
//    $pResUrl = '../../2020/sale/decascdbxr/';
//}
$pResUrl = '../../2020/sale/decascdbimfiuisusdxr/';
$pRootUrl = '../../';
include $pResUrl.'index.php';