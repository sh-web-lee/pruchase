<?php
session_start();
error_reporting(0);
$include = true;
$param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
if($_GET['to']=='iuasc'){
    header('Location:http://purchase.iobit.com/dk/iu/xiuasc.php'.$param);
    exit();
}

if(in_array($_GET['to'],array('prombn','promrn'))) {
    pageDevice('newinstall.php');
}elseif(in_array($_GET['to'],array('prombo','promro'))){
    pageDevice('newlaunch.php');
}

function pageDevice($targetUrl){
    $param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
    $targetUrl.=$param;
    if ($_COOKIE["dkiutestab"] == 'tob') {
        header("location:./".$targetUrl);
        exit;
    } else {
        if (empty($_COOKIE["dkiutestab"])) {
            $randnum = rand(1, 100);
            if ($randnum % 2 == 0) {
                setcookie("dkiutestab", "tob", time() + 30 * 24 * 3600);
                header("location:./".$targetUrl);
                exit;
            } else {
                setcookie("dkiutestab", "toa", time() + 30 * 24 * 3600);
            }
        }
    }
}
/*
$affStr=empty($_GET['AFF'])?'':('?AFF='.$_GET['AFF']);
if ($_COOKIE["dkiutestab"] == 'tob') {
    header("location:./maysale.php".$affStr);
    exit;
} else {
    if (empty($_COOKIE["dkiutestab"])) {
        $randnum = rand(1, 100);
        if ($randnum % 2 == 0) {
            setcookie("dkiutestab", "tob", time() + 30 * 24 * 3600);
            header("location:./maysale.php".$affStr);
            exit;
        } else {
            setcookie("dkiutestab", "toa", time() + 30 * 24 * 3600);
        }
    }
}
*/
//$pResUrl = '../../2018/iu/maypromodk/';
//$pResUrl = '../../2019/iu/maysaledk/';
//$pResUrl = '../../2019/iu/xmasdk/';
// $pResUrl = '../../2020/iu/topsale2005dk/';
// $pResUrl = '../../2020/iu/xmasdk/';
$pResUrl = '../../2020/iu/topsale2005dk/';
$pRootUrl = '../../';
include $pResUrl.'index.php';