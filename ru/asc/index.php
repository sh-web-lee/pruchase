<?php
header('Location:https://ru.iobit.com/purchase/asc/'.(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));
exit();
session_start();
error_reporting(0);
/*
if ($_COOKIE["ruasctestab"] == 'tob') {
    header("location:https://ru.iobit.com/purchase/asc/closesalesep/");
    exit;
} else {
    if (empty($_COOKIE["ruasctestab"])) {
        $randnum = rand(1, 100);
        if ($randnum % 2 == 0) {
            setcookie("ruasctestab", "tob", time() + 30 * 24 * 3600);
            header("location:https://ru.iobit.com/purchase/asc/closesalesep/");
            exit;
        } else {
            setcookie("ruasctestab", "toa", time() + 30 * 24 * 3600);
        }
    }
}
*/
$include = true;
$pResUrl = '../templates/2018/asc/closesalesepru/';
$pRootUrl = '../';
include $pResUrl.'index.php';