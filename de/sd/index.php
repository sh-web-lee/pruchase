<?php
session_start();
error_reporting(0);
$include = true;
/*
$affStr=empty($_GET['AFF'])?'':('?AFF='.$_GET['AFF']);
if ($_COOKIE["dedbtestab"] == 'tob') {
    header("location:./sonderangebot.php".$affStr);
    exit;
} else {
    if (empty($_COOKIE["dedbtestab"])) {
        $randnum = rand(1, 100);
        if ($randnum % 2 == 0) {
            setcookie("dedbtestab", "tob", time() + 30 * 24 * 3600);
            header("location:./sonderangebot.php".$affStr);
            exit;
        } else {
            setcookie("dedbtestab", "toa", time() + 30 * 24 * 3600);
        }
    }
}
*/
//$pResUrl = '../../2016/sd/neujahrde/';
//$pResUrl = '../../2018/sd/xmassalede/';
//$pResUrl = '../../2019/sd/sonderangebot/';
$pResUrl = '../../2019/sd/xmasde/';
$pRootUrl = '../../';
include $pResUrl.'index.php';