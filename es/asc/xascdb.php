<?php
session_start();
error_reporting(0);
$include = true;
/*$r = rand(1, 100);
if ($r % 2 == 0) {
    header("location:./novxmas2019.php" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
}*/

// $param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
// if ($_COOKIE["esascab"] == 'tob') {
//     header("location:./aprsale2020es.php".$param);
//     exit();
// } else {
//     if (empty($_COOKIE["esascab"])) {
//         $randnum = rand(1, 100);
//         if ($randnum % 2 == 0) {
//             setcookie("esascab", "toa", time() + 10 * 24 * 3600);
//         } else {
//             setcookie("esascab", "tob", time() + 10 * 24 * 3600);
//             header("location:./aprsale2020es.php".$param);
//             exit();
//         }
//     }
// }

//$pResUrl = '../../2018/asc/octnavidad2018/';
$pResUrl = '../../2020/asc/novxmasascdbes2020/';
$pRootUrl = '../../';
include $pResUrl.'index.php';