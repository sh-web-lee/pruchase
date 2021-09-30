<?php
session_start();
error_reporting(0);
$include = true;

/*$param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
if ($_COOKIE["dkasctestab"] == 'tob') {
    header("location:./xmassaledk.php".$param);
    exit;
} else {
    if (empty($_COOKIE["dkasctestab"])) {
        $randnum = rand(1, 100);
        if ($randnum % 2 == 0) {
            setcookie("dkasctestab", "tob", time() + 30 * 24 * 3600);
            header("location:./xmassaledk.php".$param);
            exit;
        } else {
            setcookie("dkasctestab", "toa", time() + 30 * 24 * 3600);
        }
    }
}*/

//$pResUrl = '../../2018/asc/xmassaledk/';
// $pResUrl = '../../2019/asc/xmasdk/';
$pResUrl = '../../2019/asc/xmasdk/';
$pRootUrl = '../../';
include $pResUrl . 'index.php';
