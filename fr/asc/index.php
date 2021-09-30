<?php
session_start();
error_reporting(0);
$include = true;

// $param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
// if ($_COOKIE["frasctestab"] == 'tob') {
//     header("location:./printemps.php".$param);
//     exit;
// } else {
//     if (empty($_COOKIE["frasctestab"])) {
//         $randnum = rand(1, 100);
//         if ($randnum % 2 == 0) {
//             setcookie("frasctestab", "tob", time() + 30 * 24 * 3600);
//             header("location:./printemps.php".$param);
//             exit;
//         } else {
//             setcookie("frasctestab", "toa", time() + 30 * 24 * 3600);
//         }
//     }
// }

function pageDevice($targetUrl, $cookieName) {
  $param = $_SERVER["QUERY_STRING"] ? ('?' . $_SERVER["QUERY_STRING"]) : '';
  $targetUrl .= $param;
  if ($_COOKIE[$cookieName] == 'tob') {
    header("location:./" . $targetUrl);
    exit;
  } else {
    if (empty($_COOKIE[$cookieName])) {
      $randnum = rand(1, 100);
      if ($randnum % 2 == 0) {
        setcookie($cookieName, "tob", time() + 30 * 24 * 3600);
        header("location:./" . $targetUrl);
        exit;
      } else {
        setcookie($cookieName, "toa", time() + 30 * 24 * 3600);
      }
    }
  }
}
//pageDevice('xmas2020.php','xmas2020');
//$pResUrl = '../../2019/asc/aprsalesfr/';
//$pResUrl = '../../2019/asc/maysalesbfr/';
// $r = rand(1, 100);
// if ($r % 2 == 0) {
//   header("location:./xmas2020.php" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
// 	exit;
// }
// $pResUrl = '../../2019/asc/junsalesbfr/';
// pageDevice('xmas2020.php','frxmas2020');
// $pResUrl = '../../2020/asc/julyfr/';
// $pResUrl = '../../2020/asc/xmasfr/';
$pResUrl = '../../2020/asc/julyfr/';
$pRootUrl = '../../';
include $pResUrl.'index.php';