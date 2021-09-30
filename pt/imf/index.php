<?php
session_start();
error_reporting(0);
$include = true;
/*
$param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
if ($_COOKIE["ptimftestab"] == 'tob') {
    header("location:./julysalept.php".$param);
    exit;
} else {
    if (empty($_COOKIE["ptimftestab"])) {
        $randnum = rand(1, 100);
        if ($randnum % 2 == 0) {
            setcookie("ptimftestab", "tob", time() + 30 * 24 * 3600);
            header("location:./julysalept.php".$param);
            exit;
        } else {
            setcookie("ptimftestab", "toa", time() + 30 * 24 * 3600);
        }
    }
}
*/
//$pResUrl = '../../2017/imf/aprsalept/';
//$pResUrl = '../../2018/imf/xmasindexpt/';
//$pResUrl = '../../2018/imf/newyearpt/';
$pResUrl = '../../2017/imf/aprsalept/';
// $pResUrl = '../../2020/imf/xmasindexpt/';
$pRootUrl = '../../';
include $pResUrl.'index.php';