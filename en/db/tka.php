<?php
session_start();
error_reporting(0);
$include = true;

if ($_COOKIE["trdbtestab"] == 'tob') {
    header("location:./tkb.php");
    exit;
} else {
    if (empty($_COOKIE["trdbtestab"])) {
        $randnum = rand(1, 100);
        if ($randnum % 2 == 0) {
            setcookie("trdbtestab", "tob", time() + 30 * 24 * 3600);
            header("location:./tkb.php");
            exit;
        } else {
            setcookie("trdbtestab", "toa", time() + 30 * 24 * 3600);
        }
    }
}

$pResUrl = '../../2019/db/tka/';
$pRootUrl = '../../';
include $pResUrl.'index.php';