<?php
session_start();
error_reporting(0);
$include = true;

if (in_array($_GET['to'], array('prombn', 'promrn'))) {
  pageDevice('newinstall.php');
} elseif (in_array($_GET['to'], array('prombo', 'promro'))) {
  pageDevice('newlaunch.php');
}

function pageDevice($targetUrl)
{
  $param = $_SERVER["QUERY_STRING"] ? ('?' . $_SERVER["QUERY_STRING"]) : '';
  $targetUrl .= $param;
  if ($_COOKIE["nliutestab"] == 'tob') {
    header("location:./" . $targetUrl);
    exit;
  } else {
    if (empty($_COOKIE["nliutestab"])) {
      $randnum = rand(1, 100);
      if ($randnum % 2 == 0) {
        setcookie("nliutestab", "tob", time() + 30 * 24 * 3600);
        header("location:./" . $targetUrl);
        exit;
      } else {
        setcookie("nliutestab", "toa", time() + 30 * 24 * 3600);
      }
    }
  }
}

//$pResUrl = '../../2019/iu/marchsalenl/';
//$pResUrl = '../../2019/iu/novxmasnl/';
$pResUrl = '../../2020/iu/jansalenl/';
// $pResUrl = '../../2020/iu/novxmas2020nl/';
$pRootUrl = '../../';
include $pResUrl . 'index.php';
