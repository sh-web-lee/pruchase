<?php
session_start();
error_reporting(0);
$include = true;
/*$r = rand(1, 100);
if ($r % 2 == 0) {
    header("location:./xmasde.php" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
}*/
if(in_array($_GET['to'],array('usb'))){
    pageDivide('usb.php');
}elseif(in_array($_GET['to'],array('at'))){
    pageDivide('track.php');
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
// pageDevice('2020sommer.php','2020sommer');
$pResUrl = '../../2019/imf/xmasde/';
// $pResUrl = '../../2020/imf/xmasde/';
$pRootUrl = '../../';

include $pResUrl.'index.php';