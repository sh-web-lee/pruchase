<?php
session_start();
error_reporting(0);
$include = true;
$lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$langarr = explode(",", $lang);
$userlang = $langarr[0];
//file_put_contents('lang.txt',$userlang."\r\n",FILE_APPEND);
//if(strtolower($userlang)=='en-gb'){
//    header("location:https://purchase.iobit.com/en-gb/asc/index.php");
//    exit;
//}
/*
if(empty($_GET['pop'])) {
    if ($userlang == 'de' || $userlang == 'de-DE') {
        header("location:http://purchase.iobit.com/de/asc/index.php");
        exit;
    } elseif ($userlang == 'it' || $userlang == 'it-IT') {
        header("location:http://purchase.iobit.com/it/asc/index.php");
        exit;
    } elseif ($userlang == 'nl' || $userlang == 'nl-NL' || $userlang == 'nl-BE') {
        header("location:http://purchase.iobit.com/nl/asc/index.php");
        exit;
    }
}
*/
//function pageDevice($targetUrl){
//    $param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
//    $targetUrl.=$param;
//    if ($_COOKIE["enascnewyear"] == 'tob') {
//        header("location:./".$targetUrl);
//        exit;
//    } else {
//        if (empty($_COOKIE["enascnewyear"])) {
//            $randnum = rand(1, 100);
//            if ($randnum % 2 == 0) {
//                setcookie("enascnewyear", "tob", time() + 30 * 24 * 3600);
//                header("location:./".$targetUrl);
//                exit;
//            } else {
//                setcookie("enascnewyear", "toa", time() + 30 * 24 * 3600);
//            }
//        }
//    }
//}
//
//pageDevice('newyear2021.php');

//$pResUrl = '../../2017/asc/jannewyearsale/';
//$pResUrl = '../../2017/asc/decxmasb/';
//$pResUrl = '../../2018/asc/novbsale/';
//$pResUrl = '../../2018/asc/decchristmas/';
//$pResUrl = '../../2018/asc/decchristmasb/';
//$pResUrl = '../../2019/asc/janascanniversary/';
//$pResUrl = '../../2019/asc/octbsale/';
//$pResUrl = '../../2019/asc/novxmassale/';
// $pResUrl = '../../2020/asc/julspringb/';
// $pResUrl = '../../2020/asc/indexbf/';
//$pResUrl = '../../2020/asc/decxmssale/';
// $pResUrl = '../../2021/asc/jannewyear/';
// $pResUrl = '../../2021/asc/mayannisale/';
$pResUrl = '../../2021/asc/junesmrsale/';

$pRootUrl = '../../';
include $pResUrl . 'index.php';
