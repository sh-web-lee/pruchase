<?php
session_start();
error_reporting(0);
$include = true;

if (in_array($_GET['to'], array('prombn', 'promrn'))) {
    pageDevice('newinstall.php');
} elseif (in_array($_GET['to'], array('prombo', 'promro'))) {
    pageDevice('newlaunch.php');
}

function pageDevice($targetUrl)
{
    $param = $_SERVER["QUERY_STRING"] ? ('?' . $_SERVER["QUERY_STRING"]) : '';
    $targetUrl .= $param;
    if ($_COOKIE["sviutestab"] == 'tob') {
        header("location:./" . $targetUrl);
        exit;
    } else {
        if (empty($_COOKIE["sviutestab"])) {
            $randnum = rand(1, 100);
            if ($randnum % 2 == 0) {
                setcookie("sviutestab", "tob", time() + 30 * 24 * 3600);
                header("location:./" . $targetUrl);
                exit;
            } else {
                setcookie("sviutestab", "toa", time() + 30 * 24 * 3600);
            }
        }
    }
}

// $pResUrl = '../../2018/iu/novxmassv/';
// $pResUrl = '../../2019/iu/jannewyearsv/';
$pResUrl = '../../2020/iu/may3pcoffersv/';
// $pResUrl = '../../2020/iu/novxmassv2020/';
$pRootUrl = '../../';
include $pResUrl . 'index.php';
