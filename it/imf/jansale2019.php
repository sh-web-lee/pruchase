<?php
session_start();
error_reporting(0);
$include = true;
/*
if ($_COOKIE["itimfjantestab"] == 'tob') {
    header("location:./jansaleb2019.php");
    exit;
} else {
    if (empty($_COOKIE["itimfjantestab"])) {
        $randnum = rand(1, 100);
        if ($randnum % 2 == 0) {
            setcookie("itimfjantestab", "tob", time() + 30 * 24 * 3600);
            header("location:./jansaleb2019.php");
            exit;
        } else {
            setcookie("itimfjantestab", "toa", time() + 30 * 24 * 3600);
        }
    }
}
*/
$pResUrl = '../../2019/imf/jansale2019it/';
$pRootUrl = '../../';
include $pResUrl.'index.php';