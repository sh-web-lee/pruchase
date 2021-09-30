<?php
session_start();
error_reporting(0);

// if($_GET['to']=='iuasc'){
//     $param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
//     header('location:./xiuasc.php'.$param);
//     exit();
// }


$include = true;
// $pResUrl = '../../2020/iu/springsale2020pl/';
// $pResUrl = '../../2020/iu/summersale2020pl/';
// $pResUrl = '../../2020/iu/school2020pl/';
$pResUrl = '../../2020/iu/springsale2020pl/';
// $pResUrl = '../../2020/iu/novxmas2020pl/';
$pRootUrl = '../../';
include $pResUrl.'index.php';