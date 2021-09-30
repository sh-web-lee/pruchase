<?php
session_start();
error_reporting(0);

$queryStr=$_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
header("location:./iu9preorderofficialitb.php".$queryStr);exit();
if ($_COOKIE["itiupretestab2"] == 'tob') {
    header("location:./iu9preorderofficialitb.php".$queryStr);
    exit;
} else {
    if (empty($_COOKIE["itiupretestab2"])) {
        $randnum = rand(1, 100);
        if ($randnum % 2 == 0) {
            setcookie("itiupretestab2", "tob", time() + 30 * 24 * 3600);
            header("location:./iu9preorderofficialitb.php".$queryStr);
            exit;
        } else {
            setcookie("itiupretestab2", "toa", time() + 30 * 24 * 3600);
        }
    }
}

$include = true;
$pResUrl = '../../2019/iu/julyiu9preorderofficialitit/';
$pRootUrl = '../../';
include $pResUrl.'index.php';