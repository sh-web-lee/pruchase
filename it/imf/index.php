<?php
session_start();
error_reporting(0);
$include = true;
/*$r = rand(1, 100);
if ($r % 2 == 0) {
    header("location:./novxsale2019.php" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
}*/
//$queryStr=empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING']);
//if ($_COOKIE["itimftestab"] == 'tob') {
//    header("location:./ottsale2019.php".$queryStr);
//    exit;
//} else {
//    if (empty($_COOKIE["itimftestab"])) {
//        $randnum = rand(1, 100);
//        if ($randnum % 2 == 0) {
//            setcookie("itimftestab", "tob", time() + 30 * 24 * 3600);
//            header("location:./ottsale2019.php".$queryStr);
//            exit;
//        } else {
//            setcookie("itimftestab", "toa", time() + 30 * 24 * 3600);
//        }
//    }
//}

if(in_array($_GET['ref'],array('ugr','ug'))){
    header("location:./usb.php");
}elseif(in_array($_GET['ref'],array('atn','atb','atr'))){
    header("location:./track.php");
}

if(in_array($_GET['to'],array('bd'))){
    //pageDivide('bd.php');
    header("location:./bd.php");
}elseif(in_array($_GET['to'],array('ar'))){
    //pageDivide('ar.php');
    header("location:./ar.php");
}elseif(in_array($_GET['to'],array('sb'))){
    //pageDivide('sb.php');
    header("location:./sb.php");
}

function pageDivide($targetUrl){
    $param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
    $targetUrl.=$param;
    if ($_COOKIE["itimftestab"] == 'tob') {
        header("location:./".$targetUrl);
        exit;
    } else {
        if (empty($_COOKIE["itimftestab"])) {
            $randnum = rand(1, 100);
            if ($randnum % 2 == 0) {
                setcookie("itimftestab", "tob", time() + 30 * 24 * 3600);
                header("location:./".$targetUrl);
                exit;
            } else {
                setcookie("itimftestab", "toa", time() + 30 * 24 * 3600);
            }
        }
    }
}

// pageDivide('julsale2020.php');
// $pResUrl = '../../2018/imf/summersale2018it/';
//$pResUrl = '../../2018/imf/natale2018it/';
//$pResUrl = '../../2018/imf/decnyit/';
//$pResUrl = '../../2019/imf/jansale2019it/';
// $pResUrl = '../../2019/imf/novxsale2019it/';
$pResUrl = '../../2020/imf/julsale2020it/';
$pRootUrl = '../../';
include $pResUrl.'index.php';