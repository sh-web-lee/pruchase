<?php
session_start();
error_reporting(0);
$include = true;
/*
$query=empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING']);
if ($_COOKIE["eniuupdatetestab"] == 'tob') {
    header("location:./iu8updaterb.php".$query);
    exit;
} else {
    if (empty($_COOKIE["eniuupdatetestab"])) {
        $randnum = rand(1, 100);
        if ($randnum % 2 == 0) {
            setcookie("eniuupdatetestab", "tob", time() + 30 * 24 * 3600);
            header("location:./iu8updaterb.php".$query);
            exit;
        } else {
            setcookie("eniuupdatetestab", "toa", time() + 30 * 24 * 3600);
        }
    }
}
*/
//$pResUrl = '../../2018/iu/iu8novupdater/';
$pResUrl = '../../2019/iu/mariuupdater/';
$pRootUrl = '../../';
include $pResUrl . 'index.php';
