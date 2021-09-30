<?php
session_start();
error_reporting(0);
$include = true;
//$r = rand(1, 100);
/*if ($r % 2 == 0) {
    header("location:./novxmas2019.php" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
}*/


// $affStr=empty($_GET['AFF'])?'':('?AFF='.$_GET['AFF']);
//$queryString = (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING']));
//if ($_COOKIE["plasctestab"] == 'tob') {
//    header("location:./jansale.php".$queryString);
//    exit;
//} else {
//    if (empty($_COOKIE["plasctestab"])) {
//        $randnum = rand(1, 100);
//        if ($randnum % 2 == 0) {
//            setcookie("plasctestab", "tob", time() + 30 * 24 * 3600);
//            header("location:./jansale.php".$queryString);
//            exit;
//        } else {
//            setcookie("plasctestab", "toa", time() + 30 * 24 * 3600);
//        }
//    }
//}

function pageDevice($targetUrl,$cookieName){
    $param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
    $targetUrl.=$param;
    if ($_COOKIE[$cookieName] == 'tob') {
        header("location:./".$targetUrl);
        exit;
    } else {
        if (empty($_COOKIE[$cookieName])) {
            $randnum = rand(1, 100);
            if ($randnum % 2 == 0) {
                setcookie($cookieName, "tob", time() + 30 * 24 * 3600);
                header("location:./".$targetUrl);
                exit;
            } else {
                setcookie($cookieName, "toa", time() + 30 * 24 * 3600);
            }
        }
    }
}
// pageDevice('summersale2020.php','plascabtest0728');
//$pResUrl = '../../2019/asc/junsale2019pl/';
//$pResUrl = '../../2019/asc/novxmas2019pl/';
//$pResUrl = '../../2020/asc/easter2020pl/';
$pResUrl = '../../2020/asc/aprsale2020pl/';
//$pResUrl = '../../2020/asc/summersale2020pl/';
$pRootUrl = '../../';
include $pResUrl.'index.php';