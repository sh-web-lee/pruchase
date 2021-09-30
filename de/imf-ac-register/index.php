<?php
session_start();
error_reporting(0);
$include = true;
/*
$affStr=empty($_GET['AFF'])?'':('?AFF='.$_GET['AFF']);
if ($_COOKIE["deimfactestab"] == 'tob') {
    header("location:./newpageade.php".$affStr);
    exit;
} else {
    if (empty($_COOKIE["deimfactestab"])) {
        $randnum = rand(1, 100);
        if ($randnum % 2 == 0) {
            setcookie("deimfactestab", "tob", time() + 30 * 24 * 3600);
            header("location:./newpageade.php".$affStr);
            exit;
        } else {
            setcookie("deimfactestab", "toa", time() + 30 * 24 * 3600);
        }
    }
}
*/
//$pResUrl = '../../2017/imf-ac-register/acprede/';
$pResUrl = '../../2019/imf-ac-register/newpageade/';
$pRootUrl = '../../';
include $pResUrl.'index.php';