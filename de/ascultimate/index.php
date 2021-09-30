<?php
session_start();
error_reporting(0);
$include = true;

function pageDivide($targetUrl){
    $param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
    $targetUrl.=$param;
    if ($_COOKIE["deascuabtest"] == 'tob') {
        header("location:./".$targetUrl);
        exit;
    } else {
        if (empty($_COOKIE["deascuabtest"])) {
            $randnum = rand(1, 100);
            if ($randnum % 2 == 0) {
                setcookie("deascuabtest", "tob", time() + 30 * 24 * 3600);
                header("location:./".$targetUrl);
                exit;
            } else {
                setcookie("deascuabtest", "toa", time() + 30 * 24 * 3600);
            }
        }
    }
}
//pageDivide('superrabatt.php');
//$pResUrl = '../../2018/ascu/xmassalede/';
//$pResUrl = '../../2019/ascu/maypromode/';
$pResUrl = '../../2019/ascu/xmasde/';
$pRootUrl = '../../';
include $pResUrl.'index.php';