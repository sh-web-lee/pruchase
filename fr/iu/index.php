<?php
session_start();
error_reporting(0);
$include = true;

if (in_array($_GET['to'], array('prombn', 'promrn'))) {
  pageDevice('newinstall.php');
} elseif (in_array($_GET['to'], array('prombo', 'promro'))) {
  pageDevice('newlaunch.php');
} elseif ($_GET['to'] == 'enablenew' || $_GET['to'] == 'cleanuninstall') {
  header('location:./installmonitorb.php' . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
  exit();
}

function pageDevice($targetUrl, $cookieName)
{
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


// pageDevice('apr.php','friuabtest');
//$pResUrl = '../../2018/iu/jannewyearsalesfr/';
//$pResUrl = '../../2018/iu/marsalesfr/';
//$pResUrl = '../../2019/iu/jannewyearsalefr/';
//$pResUrl = '../../2019/iu/janwintersalefr/';
//$pResUrl = '../../2019/iu/xmassalesfr/';
// $pResUrl = '../../2020/iu/janwintersalesfr/';
$pResUrl = '../../2020/iu/aprsalesfr/';
// $pResUrl = '../../2020/iu/xmasfr/';
$pRootUrl = '../../';
include $pResUrl . 'index.php';
