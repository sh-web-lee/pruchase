<?php
session_start();
error_reporting(0);
$include = true;

$param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
if ($_COOKIE["nlascpretestab"] == 'tob') {
    header("location:./asc13preorderofficialnl.php".$param);
    exit;
} else {
    if (empty($_COOKIE["nlascpretestab"])) {
        $randnum = rand(1, 100);
        if ($randnum % 2 == 0) {
            setcookie("nlascpretestab", "tob", time() + 30 * 24 * 3600);
            header("location:./asc13preorderofficialnl.php".$param);
            exit;
        } else {
            setcookie("nlascpretestab", "toa", time() + 30 * 24 * 3600);
        }
    }
}

$pResUrl = '../../2019/asc/sepasc13preorderofficialnl/';
$pRootUrl = '../../';
include $pResUrl.'index.php';