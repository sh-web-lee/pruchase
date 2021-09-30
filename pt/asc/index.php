<?php
session_start();
error_reporting(0);
$include = true;
//$param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
//if ($_COOKIE["ptasctestab"] == 'tob') {
//    header("location:./julhosalept.php".$param);
//    exit;
//} else {
//    if (empty($_COOKIE["ptasctestab"])) {
//        $randnum = rand(1, 2);
//        if ($randnum % 2 == 0) {
//            setcookie("ptasctestab", "tob", time() + 30 * 24 * 3600);
//            header("location:./julhosalept.php".$param);
//            exit;
//        } else {
//            setcookie("ptasctestab", "toa", time() + 30 * 24 * 3600);
//        }
//    }
//}

//$pResUrl = '../../2017/asc/marsalept/';
//$pResUrl = '../../2018/asc/outsalept/';
//$pResUrl = '../../2018/asc/xmasindexpt/';
//$pResUrl = '../../2018/asc/newyearpt/';
// $pResUrl = '../../2018/asc/outsalept/';
// if($_GET['st']=='asc_wr'){
//     $pResUrl = '../../2017/asc/marsalept/';
// }else{
//     $pResUrl = '../../2018/asc/outsalept/';
// }
//$pResUrl = '../../2017/asc/marsalept/';
//$pResUrl = '../../2019/asc/agossalept/';
//$pResUrl = '../../2017/asc/marsalept/';
$pResUrl = '../../2019/asc/agossalept/';
// $pResUrl = '../../2019/asc/xmasindexpt/';
$pRootUrl = '../../';
include $pResUrl.'index.php';