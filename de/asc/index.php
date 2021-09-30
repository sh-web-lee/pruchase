<?php
session_start();
error_reporting(0);
$include = true;
// header("location:./2020xmas.php" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
//$param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
// if ($_COOKIE["deasctestab"] == 'tob') {
//     header("location:./septembersale.php".$param);
//     exit;
// } else {
//     if (empty($_COOKIE["deasctestab"])) {
//         $randnum = rand(1, 100);
//         if ($randnum % 2 == 0) {
//             setcookie("deasctestab", "tob", time() + 30 * 24 * 3600);
//             header("location:./septembersale.php".$param);
//             exit;
//         } else {
//             setcookie("deasctestab", "toa", time() + 30 * 24 * 3600);
//         }
//     }
// }
//$pResUrl = '../../2018/asc/febpromodede/';
//$pResUrl = '../../2018/asc/febpromodedeb/';
//$pResUrl = '../../2018/asc/julysalede/';
//$pResUrl = '../../2018/asc/febpromodedeb/';
//$pResUrl = '../../2018/asc/xmas2018/';
//$pResUrl = '../../2019/asc/neujahr2019/';
//$pResUrl = '../../2018/asc/febpromodedeb/';
//$pResUrl = '../../2019/asc/5pcsalede/';
//$pResUrl = '../../2019/asc/3pcsalede/';
//$pResUrl = '../../2019/asc/julisalede/';
//$pResUrl = '../../2019/asc/xmasde/';
//  $r = rand(1, 100);
//  if ($r % 2 == 0) {
//      header("location:./rabattab80euro.php" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
//  }
//$pResUrl = '../../2019/asc/limitedsalede/';
//$pResUrl = '../../2020/asc/magazinde/';
// $pResUrl = '../../2020/asc/septembersale/';
//$pResUrl = '../../2020/asc/2020xmasde/';
$pResUrl = '../../2020/asc/septembersale/';
$pRootUrl = '../../';
include $pResUrl . 'index.php';
