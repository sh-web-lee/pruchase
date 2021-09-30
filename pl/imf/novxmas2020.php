<?php
error_reporting(0);
session_start();
$include = true;
if ($_GET['to'] == 'bd') {
  header("location:./bd.php" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
  exit;
  // $r = rand(1, 100);
  // if ($r % 2 == 0) {
  //     header("location:./bd.php" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
  //     exit;
  // }
}
if ($_GET['to'] == 'ar') {
  header("location:./ar.php" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
  exit;
}
// $param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
// if ($_COOKIE["frimftestab"] == 'tob') {
//     header("location:./solde2020.php".$param);
//     exit;
// } else {
//     if (empty($_COOKIE["frimftestab"])) {
//         $randnum = rand(1, 2);
//         if ($randnum % 2 == 0) {
//             setcookie("frimftestab", "tob", time() + 30 * 24 * 3600);
//             header("location:./solde2020.php".$param);
//             exit;
//         } else {
//             setcookie("frimftestab", "toa", time() + 30 * 24 * 3600);
//         }
//     }
// }

//$pResUrl = '../../2017/imf/augsummersalefr/';
// $pResUrl = '../../2018/imf/xmasfr/';
//$pResUrl = '../../2019/imf/janwintersalefr/';
// $r = rand(1, 100);
// if ($r % 2 == 0) {
//     header("location:./2020summer.php" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
// }
//$pResUrl = '../../2019/imf/juinsalesfr/';
// $pResUrl = '../../2020/imf/janwintersalesfr/';
//$pResUrl = '../../2020/imf/junesummersalefr/';
$pResUrl = '../../2020/imf/novxmas2020pl/';
$pRootUrl = '../../';
include $pResUrl . 'index.php';
