<?php
session_start();
error_reporting(0);
$include = true;
// $pResUrl = '../../2020/isu/novxmasnl/';
$pResUrl = '../../2020/isu/maysalenl/';
//$pResUrl = '../../2019/isu/isu2launchnl/';
//$pResUrl = '../../2019/isu/novxmasnl/';
$pRootUrl = '../../';
//pageDevice('maysale.php','nlmaysale2020');
include $pResUrl.'index.php';

function pageDevice($targetUrl,$cookieName){
    $param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
    $targetUrl.=$param;
    if ($_COOKIE[$cookieName] == 'tob') {
        header("location:./".$targetUrl);
        exit;
    } else {
        if (empty($_COOKIE[$cookieName])) {
            $randnum = rand(1, 100);
            if ($randnum % 2 == 0) {
                setcookie($cookieName, "tob", time() + 30 * 24 * 3600);
                header("location:./".$targetUrl);
                exit;
            } else {
                setcookie($cookieName, "toa", time() + 30 * 24 * 3600);
            }
        }
    }
}