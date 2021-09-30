<?php
session_start();
error_reporting(0);
$include = true;
/*
$queryStr=empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING']);
if ($_COOKIE["dkimftestab"] == 'tob') {
    header("location:./maysale.php".$queryStr);
    exit;
} else {
    if (empty($_COOKIE["dkimftestab"])) {
        $randnum = rand(1, 100);
        if ($randnum % 2 == 0) {
            setcookie("dkimftestab", "tob", time() + 30 * 24 * 3600);
            header("location:./maysale.php".$queryStr);
            exit;
        } else {
            setcookie("dkimftestab", "toa", time() + 30 * 24 * 3600);
        }
    }
}
*/
//$pResUrl = '../../2018/imf/aprsaledk/';
//$pResUrl = '../../2019/imf/newyeardk/';
// $pResUrl = '../../2019/imf/xmasdk/';
$pResUrl = '../../2019/imf/xmasdk/';
$pRootUrl = '../../';

include $pResUrl.'index.php';