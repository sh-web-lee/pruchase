<?php
session_start();
error_reporting(0);
$include = true;

$lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$langarr = explode(",",$lang);
$userlang = $langarr[0];
if($userlang=='ja'||$userlang =='ja_JP'){
    if($_GET['x']=='imfxmaspopup'){
        header('location:http://jp.iobit.com/rd/imf-free-xmaspopup?x=imfxmaspopup');
        exit;
    }
}
// $pResUrl = '../../2019/imf/aprnewbundle/';
//$pResUrl = '../../2019/imf/octbsale/';
// $pResUrl = '../../2019/imf/novxmassalea/';
// $pResUrl = '../../2020/imf/indexbf/';
$pResUrl = '../../2019/imf/novxmassalea/';
$pRootUrl = '../../';
include $pResUrl.'index.php';