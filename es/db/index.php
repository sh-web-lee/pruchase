<?php
session_start();
error_reporting(0);
$include = true;

if(in_array($_GET['to'],array('hombnro','prebtno'))){
    pageDevice('newlaunch.php','dbnewlau');
}

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
//pageDevice('./aprsale2021es.php','prsalepageDrv');


//$pResUrl = '../../2019/db/octnavidad2019es/';
//$pResUrl = '../../2020/db/jannewyeares/';
//$pResUrl = '../../2020/db/novnavidad2020es/';
$pResUrl = '../../2021/db/aprsale2021es/';
$pRootUrl = '../../';
include $pResUrl.'index.php';