<?php
session_start();
error_reporting(0);
$include = true;

if(in_array($_GET['to'],array('prombn','promrn'))) {
    pageDevice('newinstall.php');
}elseif(in_array($_GET['to'],array('prombo','promro'))){
    pageDevice('newlaunch.php');
}elseif($_GET['to']=='enablenew'||$_GET['to']=='cleanuninstall'){
    header('location:./installmonitorb.php' . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
    exit();
}

function pageDevice($targetUrl){
    $param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
    $targetUrl.=$param;
    if ($_COOKIE["esiutestab"] == 'tob') {
        header("location:./".$targetUrl);
        exit;
    } else {
        if (empty($_COOKIE["esiutestab"])) {
            $randnum = rand(1, 100);
            if ($randnum % 2 == 0) {
                setcookie("esiutestab", "tob", time() + 30 * 24 * 3600);
                header("location:./".$targetUrl);
                exit;
            } else {
                setcookie("esiutestab", "toa", time() + 30 * 24 * 3600);
            }
        }
    }
}

//$pResUrl = '../../2018/iu/aprofferes/';
// $pResUrl = '../../2018/iu/octnavidades/';
//$pResUrl = '../../2019/iu/febsalees/';
//$pResUrl = '../../2019/iu/novnavidad2019es/';
$pResUrl = '../../2020/iu/june3pctwoofferes/';
// $pResUrl = '../../2020/iu/novxmases2020/';
$pRootUrl = '../../';
include $pResUrl.'index.php';