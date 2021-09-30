<?php
    header('Location:https://ru.iobit.com/purchase/db/'.(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));
    exit();
session_start();
error_reporting(0);
$include = true;
/*
if ($_COOKIE["rudbtestab"] == 'tob') {
    header("location:https://ru.iobit.com/purchase/db/closesaleoct/");
    exit;
} else {
    if (empty($_COOKIE["rudbtestab"])) {
        $randnum = rand(1, 100);
        if ($randnum % 2 == 0) {
            setcookie("rudbtestab", "tob", time() + 30 * 24 * 3600);
            header("location:.https://ru.iobit.com/purchase/db/closesaleoct/");
            exit;
        } else {
            setcookie("rudbtestab", "toa", time() + 30 * 24 * 3600);
        }
    }
}
*/
$pResUrl = '../templates/2018/db/junpromoru/';
$pRootUrl = '../';
include $pResUrl.'index.php';