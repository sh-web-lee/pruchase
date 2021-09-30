<?php
session_start();
error_reporting(0);
$include = true;

//$r = rand(1, 100);
//if ($r % 2 == 0) {
//    header("location:./junisale.php" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
//}

if (in_array($_GET['to'], array('prombn', 'promrn'))) {
    pageDevice('newinstall.php');
} elseif (in_array($_GET['to'], array('prombo', 'promro'))) {
    pageDevice('newlaunch.php');
}
if (in_array($_GET['to'], array('installmonitor', 'enable'))) {
    $param = $_SERVER["QUERY_STRING"] ? ('?' . $_SERVER["QUERY_STRING"]) : '';
    header("location:./installmonitor.php" . $param);
} elseif ($_GET['to'] == 'enablenew' || $_GET['to'] == 'cleanuninstall') {
    header('location:./installmonitorb.php' . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
    exit();
}

function pageDevice($targetUrl)
{
    $param = $_SERVER["QUERY_STRING"] ? ('?' . $_SERVER["QUERY_STRING"]) : '';
    $targetUrl .= $param;
    if ($_COOKIE["deiutestab"] == 'tob') {
        header("location:./" . $targetUrl);
        exit;
    } else {
        if (empty($_COOKIE["deiutestab"])) {
            $randnum = rand(1, 100);
            if ($randnum % 2 == 0) {
                setcookie("deiutestab", "tob", time() + 30 * 24 * 3600);
                header("location:./" . $targetUrl);
                exit;
            } else {
                setcookie("deiutestab", "toa", time() + 30 * 24 * 3600);
            }
        }
    }
}
//pageDevice('superdiscount.php');

//$pResUrl = '../../2018/iu/marpromode/';
// $pResUrl = '../../2018/iu/finalersalede/';
//$pResUrl = '../../2018/iu/xmassalede/';
//$pResUrl = '../../2019/iu/14birthdayde/';
// $pResUrl = '../../2020/iu/superdiscountde/';
$pResUrl = '../../2020/iu/superdiscountde/';
$pRootUrl = '../../';
include $pResUrl . 'index.php';
