<?php
session_start();
error_reporting(0);
 $include = true;

// $affStr=empty($_GET['AFF'])?'':('?AFF='.$_GET['AFF']);
//if ($_COOKIE["svasctestab"] == 'tob') {
// header("location:./febsalesv.php".$affStr);
// exit;
//} else {
// if (empty($_COOKIE["svasctestab"])) {
//  $randnum = rand(1, 100);
//  if ($randnum % 2 == 0) {
//   setcookie("svasctestab", "tob", time() + 30 * 24 * 3600);
//   header("location:./febsalesv.php".$affStr);
//   exit;
//  } else {
//   setcookie("svasctestab", "toa", time() + 30 * 24 * 3600);
//  }
// }
//}

 // $pResUrl = '../../2018/asc/novxmassv/';
//$pResUrl = '../../2019/asc/jannewyearsv/';
//$pResUrl = '../../2019/asc/febsalesv/';
//$pResUrl = '../../2019/asc/febsalesv/';
//$pResUrl = '../../2019/asc/novxmassv/';
// $pResUrl = '../../2020/asc/febsalesv/';
 $pResUrl = '../../2020/asc/novxmassv2020/';
 $pRootUrl = '../../';
 include $pResUrl.'index.php';