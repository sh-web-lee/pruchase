<?php
session_start();
error_reporting(0);
$include = true;
// $r = rand(1, 100);
// if ($r % 2 == 0) {
//     header("location:./febsale2020.php" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
// }
if((!empty($_GET['to']))&&($_GET['to']=='enablenew')){
    header('location:./installmonitorb.php' . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
    exit();
}
if($_GET['to']=='cleanuninstall'){
    header('location:./installmonitorb.php' . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
    exit();
}
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
// pageDevice('sepsale2020.php','sepsale2020');
$pResUrl = '../../2020/iu/sepsale2020it/';
$pRootUrl = '../../';
include $pResUrl.'index.php';
