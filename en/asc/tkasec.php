<?php
session_start();
error_reporting(0);
$include = true;

$queryStr=empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING']);
if ($_COOKIE["trasctestab"] == 'tob') {
    header("location:./tkbsec.php".$queryStr);
    exit;
} else {
    if (empty($_COOKIE["trasctestab"])) {
        $randnum = rand(1, 100);
        if ($randnum % 2 == 0) {
            setcookie("trasctestab", "tob", time() + 30 * 24 * 3600);
            header("location:./tkbsec.php".$queryStr);
            exit;
        } else {
            setcookie("trasctestab", "toa", time() + 30 * 24 * 3600);
        }
    }
}

$pResUrl = '../../2019/asc/tkasec/';
$pRootUrl = '../../';
include $pResUrl.'index.php';