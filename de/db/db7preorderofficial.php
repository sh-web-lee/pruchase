<?php
session_start();
error_reporting(0);
 $include = true;

$queryStr=empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING']);
if ($_COOKIE["dedbpretestab"] == 'tob') {
 header("location:./db7preorderofficialtest.php".$queryStr);
 exit;
} else {
 if (empty($_COOKIE["dedbpretestab"])) {
  $randnum = rand(1, 100);
  if ($randnum % 2 == 0) {
   setcookie("dedbpretestab", "tob", time() + 30 * 24 * 3600);
   header("location:./db7preorderofficialtest.php".$queryStr);
   exit;
  } else {
   setcookie("dedbpretestab", "toa", time() + 30 * 24 * 3600);
  }
 }
}

 $pResUrl = '../../2019/db/db7preorderofficialde/';
 $pRootUrl = '../../';
 include $pResUrl.'index.php';