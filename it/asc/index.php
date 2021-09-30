<?php
session_start();
error_reporting(0);
$include = true;


// $param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
// if ($_COOKIE["itasctestabb"] == 'tob') {
//     header("location:./febsale2020.php".$param);
//     exit;
// } else {
//     if (empty($_COOKIE["itasctestabb"])) {
//         $randnum = rand(1, 100);
//         if ($randnum % 2 == 0) {
//             setcookie("itasctestabb", "tob", time() + 30 * 24 * 3600);
//             header("location:./febsale2020b.php".$param);
//             exit;
//         } else {
//             setcookie("itasctestabb", "toa", time() + 30 * 24 * 3600);
//         }
//     }
// }

//$param = $_SERVER["QUERY_STRING"]?'?'.$_SERVER["QUERY_STRING"]:'';
//$pResUrl = '../../2018/asc/julysale2018bit/';
//$pResUrl = '../../2019/asc/offerta2019it/';
//$pResUrl = '../../2019/asc/offerta2019bit/';
//$pResUrl = '../../2019/asc/novxsale2019it/';
//$pResUrl = '../../2020/asc/febsale2020it/';
//$pResUrl = '../../2019/asc/offerta2019itc/';
// $pResUrl = '../../2020/asc/offerta2019itcgaranzia/';
$pResUrl = '../../2020/asc/febsale2020it/';
$pRootUrl = '../../';
include $pResUrl.'index.php';