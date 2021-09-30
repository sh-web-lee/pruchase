<?php
session_start();
error_reporting(0);
$include = true;

if ($_COOKIE["trasctestab"] == 'tob') {
    header("location:./tkb.php");
    exit;
} else {
    if (empty($_COOKIE["trasctestab"])) {
        $randnum = rand(1, 100);
        if ($randnum % 2 == 0) {
            setcookie("trasctestab", "tob", time() + 30 * 24 * 3600);
            header("location:./tkb.php");
            exit;
        } else {
            setcookie("trasctestab", "toa", time() + 30 * 24 * 3600);
        }
    }
}

$pResUrl = '../../2019/asc/tka/';
$pRootUrl = '../../';
include $pResUrl.'index.php';