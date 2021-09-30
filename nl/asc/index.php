<?php
session_start();
error_reporting(0);
$include = true;

// $param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
// if ($_COOKIE["nlasctestab"] == 'tob') {
//     header("location:./marchsale.php".$param);
//     exit;
// } else {
//     if (empty($_COOKIE["nlasctestab"])) {
//         $randnum = rand(1, 100);
//         if ($randnum % 2 == 0) {
//             setcookie("nlasctestab", "tob", time() + 30 * 24 * 3600);
//             header("location:./marchsale.php".$param);
//             exit;
//         } else {
//             setcookie("nlasctestab", "toa", time() + 30 * 24 * 3600);
//         }
//     }
// }

//$pResUrl = '../../2018/asc/jancheapstylenl/';
/*$r = rand(1, 100);
if ($r % 2 == 0) {
    header("location:./xmas2019.php" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
}*/
$pResUrl = '../../2020/asc/marchsalenl/';
//$pResUrl = '../../2019/asc/decnewyearnl/';
// $pResUrl = '../../2020/asc/novxmasnl/';

$pRootUrl = '../../';
include $pResUrl.'index.php';