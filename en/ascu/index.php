<?php
session_start();
error_reporting(0);
$include = true;

$lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$langarr = explode(",",$lang);
$userlang = $langarr[0];
if($userlang=='ja'||$userlang =='ja_JP'){
    if($_GET['ref']=='imfproxmaspopup'){
        header('location:http://jp.iobit.com/rd/imf-pro-xmaspopup?ref=imfproxmaspopup');
        exit;
    }
}

// $pResUrl = '../../2016/ascu/decxmassale2999/';
// $pResUrl = '../../2017/ascu/decxmas2999/';
// $pResUrl = '../../2018/ascu/junmidyear2999/';
//$pResUrl = '../../2018/ascu/novbsale2999/';
//$pResUrl = '../../2018/ascu/decchristmas2999/';
// $pResUrl = '../../2019/ascu/febanniversary2999/';
// $pResUrl = '../../2020/ascu/indexbf2999/';
// $pResUrl = '../../2020/ascu/decxmssale2999/';
// $pResUrl = '../../2021/ascu/jannewrelease2999/';
// $pResUrl = '../../2021/ascu/marspring2999/';
// $pResUrl = '../../2021/ascu/mayannisale2999/';
$pResUrl = '../../2021/ascu/junesmrsale2999/';
$pRootUrl = '../../';
include $pResUrl.'index.php';