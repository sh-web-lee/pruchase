<?php
session_start();
error_reporting(0);
$include = true;
$queryStr=empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING']);
if ($_COOKIE["frimfpretestab"] == 'tob') {
    header("location:./imf7preorderrcfr.php".$queryStr);
    exit;
} else {
    if (empty($_COOKIE["frimfpretestab"])) {
        $randnum = rand(1, 100);
        if ($randnum % 2 == 0) {
            setcookie("frimfpretestab", "tob", time() + 30 * 24 * 3600);
            header("location:./imf7preorderrcfr.php".$queryStr);
            exit;
        } else {
            setcookie("frimfpretestab", "toa", time() + 30 * 24 * 3600);
        }
    }
}
$pResUrl = '../../2019/imf/imf7preorderrcuserfr/';
$pRootUrl = '../../';
include $pResUrl.'index.php';