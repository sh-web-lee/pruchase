<?php
session_start();
error_reporting(0);
$include = true;

if(in_array($_GET['to'],array('prombn','promrn'))) {
    pageDevice('newinstall.php');
}elseif(in_array($_GET['to'],array('prombo','promro'))){
    pageDevice('newlaunch.php');
}

function pageDevice($targetUrl){
    $param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
    $targetUrl.=$param;
    if ($_COOKIE["ptiutestab"] == 'tob') {
        header("location:./".$targetUrl);
        exit;
    } else {
        if (empty($_COOKIE["ptiutestab"])) {
            $randnum = rand(1, 100);
            if ($randnum % 2 == 0) {
                setcookie("ptiutestab", "tob", time() + 30 * 24 * 3600);
                header("location:./".$targetUrl);
                exit;
            } else {
                setcookie("ptiutestab", "toa", time() + 30 * 24 * 3600);
            }
        }
    }
}

//$pResUrl = '../../2018/iu/xmasindexpt/';
//$pResUrl = '../../2018/iu/newyearpt/';
//$pResUrl = '../../2017/iu/junsalept/';
$pResUrl = '../../2019/iu/jansalept/';
//$pResUrl = '../../2019/iu/xmasindexpt/';
$pRootUrl = '../../';
include $pResUrl.'index.php';